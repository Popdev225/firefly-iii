<?php
/**
 * UserEventHandler.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Handlers\Events;

use Exception;
use FireflyConfig;
use FireflyIII\Events\BlockedBadLogin;
use FireflyIII\Events\BlockedUserLogin;
use FireflyIII\Events\ConfirmedUser;
use FireflyIII\Events\DeletedUser;
use FireflyIII\Events\LockedOutUser;
use FireflyIII\Events\RegisteredUser;
use FireflyIII\Events\RequestedNewPassword;
use FireflyIII\Events\ResentConfirmation;
use FireflyIII\Models\Configuration;
use FireflyIII\Repositories\User\UserRepositoryInterface;
use FireflyIII\User;
use Illuminate\Mail\Message;
use Log;
use Mail;
use Preferences;
use Session;
use Swift_TransportException;

/**
 * Class UserEventHandler
 *
 * This class responds to any events that have anything to do with the User object.
 *
 * The method name reflects what is being done. This is in the present tense.
 *
 *
 * @package FireflyIII\Handlers\Events
 */
class UserEventHandler
{

    /**
     * This method will bestow upon a user the "owner" role if he is the first user in the system.
     *
     * @param RegisteredUser $event
     *
     * @return bool
     */
    public function attachUserRole(RegisteredUser $event): bool
    {
        /** @var UserRepositoryInterface $repository */
        $repository = app(UserRepositoryInterface::class);

        // first user ever?
        if ($repository->count() === 1) {
            $repository->attachRole($event->user, 'owner');
        }

        return true;
    }

    /**
     * Handle user logout events.
     *
     * @return bool
     */
    public function logoutUser(): bool
    {
        // dump stuff from the session:
        Session::forget('twofactor-authenticated');
        Session::forget('twofactor-authenticated-date');

        return true;
    }

    /**
     * @param BlockedBadLogin $event
     *
     * @return bool
     */
    public function respondToBlockedBadLogin(BlockedBadLogin $event)
    {
        $email     = $event->email;
        $ipAddress = $event->ipAddress;
        /** @var Configuration $sendmail */
        $sendmail = FireflyConfig::get('mail_for_bad_login', config('firefly.configuration.mail_for_bad_login'));
        Log::debug(sprintf('Now in respondToBlockedBadLogin for email address %s', $email));
        if (is_null($sendmail) || (!is_null($sendmail) && $sendmail->data === false)) {
            Log::error(sprintf('User %s tried to login with bad credentials.', $email));

            return true;
        }

        // send email message:
        try {
            Mail::send(
                ['emails.blocked-bad-creds-html', 'emails.blocked-bad-creds-text'], ['email' => $email, 'ip' => $ipAddress], function (Message $message) use ($email) {
                $message->to($email, $email)->subject('Blocked login attempt with bad credentials');
            }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

    /**
     * @param BlockedUserLogin $event
     *
     * @return bool
     */
    public function respondToBlockedUserLogin(BlockedUserLogin $event): bool
    {
        $user      = $event->user;
        $email     = $user->email;
        $ipAddress = $event->ipAddress;
        /** @var Configuration $sendmail */
        $sendmail = FireflyConfig::get('mail_for_blocked_login', config('firefly.configuration.mail_for_blocked_login'));
        Log::debug(sprintf('Now in respondToBlockedUserLogin for email address %s', $email));
        if (is_null($sendmail) || (!is_null($sendmail) && $sendmail->data === false)) {
            Log::error(sprintf('User #%d (%s) has their accout blocked (blocked_code is "%s") but tried to login.', $user->id, $email, $user->blocked_code));

            return true;
        }

        // send email message:
        try {
            Mail::send(
                ['emails.blocked-login-html', 'emails.blocked-login-text'],
                [
                    'user_id'      => $user->id,
                    'user_address' => $email,
                    'ip'           => $ipAddress,
                    'code'         => $user->blocked_code,
                ], function (Message $message) use ($email, $user) {
                $message->to($email, $email)->subject('Blocked login attempt of blocked user');
            }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

    /**
     * @param LockedOutUser $event
     *
     * @return bool
     */
    public function respondToLockout(LockedOutUser $event): bool
    {
        $email     = $event->email;
        $ipAddress = $event->ipAddress;
        /** @var Configuration $sendmail */
        $sendmail = FireflyConfig::get('mail_for_lockout', config('firefly.configuration.mail_for_lockout'));
        Log::debug(sprintf('Now in respondToLockout for email address %s', $email));
        if (is_null($sendmail) || (!is_null($sendmail) && $sendmail->data === false)) {
            Log::error(sprintf('User %s was locked out after too many invalid login attempts.', $email));

            return true;
        }

        // send email message:
        try {
            Mail::send(
                ['emails.locked-out-html', 'emails.locked-out-text'], ['email' => $email, 'ip' => $ipAddress], function (Message $message) use ($email) {
                $message->to($email, $email)->subject('User was locked out');
            }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

    /**
     * @param DeletedUser $event
     *
     * @return bool
     */
    public function saveEmailAddress(DeletedUser $event): bool
    {
        Preferences::mark();
        $email = hash('sha256', $event->email);
        Log::debug(sprintf('Hash of email is %s', $email));
        /** @var Configuration $configuration */
        $configuration = FireflyConfig::get('deleted_users', []);
        $content       = $configuration->data;
        if (!is_array($content)) {
            $content = [];
        }
        $content[]           = $email;
        $configuration->data = $content;
        Log::debug('New content of deleted_users is ', $content);
        FireflyConfig::set('deleted_users', $content);

        Preferences::mark();

        return true;
    }

    /**
     * This method will send a newly registered user a confirmation message, urging him or her to activate their account.
     *
     * @param RegisteredUser $event
     *
     * @return bool
     */
    public function sendConfirmationMessage(RegisteredUser $event): bool
    {
        return $this->sendConfirmation($event->user, $event->ipAddress);
    }

    /**
     * If the user has somehow lost his or her confirmation message, this event will send it to the user again.
     *
     * At the moment, this method is exactly the same as the ::sendConfirmationMessage method, but that will change.
     *
     * @param ResentConfirmation $event
     *
     * @return bool
     */
    function sendConfirmationMessageAgain(ResentConfirmation $event): bool
    {
        return $this->sendConfirmation($event->user, $event->ipAddress);

    }

    /**
     * @param RequestedNewPassword $event
     *
     * @return bool
     */
    public function sendNewPassword(RequestedNewPassword $event): bool
    {
        $email     = $event->user->email;
        $ipAddress = $event->ipAddress;
        $token     = $event->token;

        $url = route('password.reset', [$token]);

        // send email.
        try {
            Mail::send(
                ['emails.password-html', 'emails.password-text'], ['url' => $url, 'ip' => $ipAddress], function (Message $message) use ($email) {
                $message->to($email, $email)->subject('Your password reset request');
            }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

    /**
     * This method will send the user a registration mail, welcoming him or her to Firefly III.
     * This message is only sent when the configuration of Firefly III says so.
     *
     * @param RegisteredUser $event
     *
     * @return bool
     */
    public function sendRegistrationMail(RegisteredUser $event)
    {

        $sendMail = env('SEND_REGISTRATION_MAIL', true);
        if (!$sendMail) {
            return true;
        }
        // get the email address
        $email     = $event->user->email;
        $address   = route('index');
        $ipAddress = $event->ipAddress;
        // send email.
        try {
            Mail::send(
                ['emails.registered-html', 'emails.registered-text'], ['address' => $address, 'ip' => $ipAddress], function (Message $message) use ($email) {
                $message->to($email, $email)->subject('Welcome to Firefly III! ');
            }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

    /**
     * When the user is confirmed, this method stores the IP address of the user
     * as a preference. Since this preference cannot be edited, it is effectively hidden
     * from the user yet stored conveniently.
     *
     * @param ConfirmedUser $event
     *
     * @return bool
     */
    public function storeConfirmationIpAddress(ConfirmedUser $event): bool
    {
        Preferences::setForUser($event->user, 'confirmation_ip_address', $event->ipAddress);

        return true;
    }

    /**
     * This message stores the users IP address on registration, in much the same
     * fashion as the previous method.
     *
     * @param RegisteredUser $event
     *
     * @return bool
     */
    public function storeRegistrationIpAddress(RegisteredUser $event): bool
    {
        Preferences::setForUser($event->user, 'registration_ip_address', $event->ipAddress);

        return true;

    }

    /**
     * @param User   $user
     * @param string $ipAddress
     *
     * @return bool
     */
    private function sendConfirmation(User $user, string $ipAddress): bool
    {
        $mustConfirmAccount = FireflyConfig::get('must_confirm_account', config('firefly.configuration.must_confirm_account'))->data;
        if ($mustConfirmAccount === false) {
            Preferences::setForUser($user, 'user_confirmed', true);
            Preferences::setForUser($user, 'user_confirmed_last_mail', 0);
            Preferences::mark();

            return true;
        }
        $email = $user->email;
        $code  = str_random(16);
        $route = route('do_confirm_account', [$code]);
        Preferences::setForUser($user, 'user_confirmed', false);
        Preferences::setForUser($user, 'user_confirmed_last_mail', time());
        Preferences::setForUser($user, 'user_confirmed_code', $code);
        try {
            Mail::send(
                ['emails.confirm-account-html', 'emails.confirm-account-text'], ['route' => $route, 'ip' => $ipAddress],
                function (Message $message) use ($email) {
                    $message->to($email, $email)->subject('Please confirm your Firefly III account');
                }
            );
        } catch (Swift_TransportException $e) {
            Log::error($e->getMessage());
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }

        return true;
    }

}
