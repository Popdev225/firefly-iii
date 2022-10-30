<?php

/*
 * BillReminder.php
 * Copyright (c) 2022 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Notifications\User;

use FireflyIII\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

/**
 * Class BillReminder
 */
class BillReminder extends Notification
{
    use Queueable;

    private Bill   $bill;
    private string $field;
    private int    $diff;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Bill $bill, string $field, int $diff)
    {
        $this->bill  = $bill;
        $this->field = $field;
        $this->diff  = $diff;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $subject = (string) trans(sprintf('email.bill_warning_subject_%s', $this->field), ['diff' => $this->diff, 'name' => $this->bill->name]);
        if (0 === $this->diff) {
            $subject = (string) trans(sprintf('email.bill_warning_subject_now_%s', $this->field), ['diff' => $this->diff, 'name' => $this->bill->name]);
        }

        return (new MailMessage())
            ->markdown('emails.bill-warning', ['field' => $this->field, 'diff' => $this->diff, 'bill' => $this->bill])
            ->subject($subject);
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param mixed $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $message = (string) trans(sprintf('email.bill_warning_subject_%s', $this->field), ['diff' => $this->diff, 'name' => $this->bill->name]);
        if (0 === $this->diff) {
            $message = (string) trans(sprintf('email.bill_warning_subject_now_%s', $this->field), ['diff' => $this->diff, 'name' => $this->bill->name]);
        }
        $bill = $this->bill;
        $url  = route('bills.show', [$bill->id]);
        return (new SlackMessage())
            ->warning()
            ->attachment(function ($attachment) use ($bill, $url) {
                $attachment->title((string) trans('firefly.visit_bill', ['name' => $bill->name]), $url);
            })
            ->content($message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
