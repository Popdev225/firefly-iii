<?php

namespace FireflyIII\Http\Middleware;

use App;
use Carbon\Carbon;
use Closure;
use FireflyIII\Models\PiggyBank;
use FireflyIII\Models\Reminder;
use Illuminate\Contracts\Auth\Guard;
use View;
use Illuminate\Support\Collection;
/**
 * Class Reminders
 *
 * @package FireflyIII\Http\Middleware
 */
class Reminders
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     *
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check() && !$request->isXmlHttpRequest()) {
            // do reminders stuff.
            $piggyBanks = $this->auth->user()->piggyBanks()->where('remind_me', 1)->get();
            $today      = new Carbon;
            /** @var \FireflyIII\Helpers\Reminders\ReminderHelperInterface $helper */
            $helper = App::make('FireflyIII\Helpers\Reminders\ReminderHelperInterface');

            /** @var PiggyBank $piggyBank */
            foreach ($piggyBanks as $piggyBank) {
                $ranges = $helper->getReminderRanges($piggyBank);

                foreach ($ranges as $range) {
                    if ($today < $range['end'] && $today > $range['start']) {
                        // create a reminder here!
                        $helper->createReminder($piggyBank, $range['start'], $range['end']);
                        // stop looping, we're done.
                        break;
                    }

                }
            }
            // delete invalid reminders
            $set = $this->auth->user()->reminders()->
                leftJoin('piggy_banks','piggy_banks.id','=','remindersable_id')->
                whereNull('piggy_banks.id')->get(['reminders.id']);
            foreach($set as $reminder) {
                $reminder->delete();
            }


            // get and list active reminders:
            $reminders = $this->auth->user()->reminders()->today()->get();
            $reminders->each(
                function (Reminder $reminder) use ($helper) {
                    $reminder->description = $helper->getReminderText($reminder);
                }
            );
            View::share('reminders', $reminders);
        }

        return $next($request);
    }
}