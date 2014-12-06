<?php
namespace FireflyIII\Event;

use Illuminate\Events\Dispatcher;


class Event
{

    public function deleteAccount(\Account $account)
    {
        // get piggy banks
        $piggies = $account->piggybanks()->get();

        // get reminders for each
        /** @var \Piggybank $piggyBank */
        foreach ($piggies as $piggyBank) {
            $reminders = $piggyBank->reminders()->get();
            /** @var \Reminder $reminder */
            foreach ($reminders as $reminder) {
                $reminder->delete();
            }
        }
    }


    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        // triggers when others are updated.
        $events->listen('account.destroy', 'FireflyIII\Event\Event@deleteAccount');
    }
}