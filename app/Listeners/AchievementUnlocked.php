<?php

namespace App\Listeners;

use Session;
use Gstt\Model\AchievementProgress;
use Gstt\Achievements\Event\Unlocked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AchievementUnlocked
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(Unlocked $event)
    {
        // There's an AchievementProgress instance located on $event->progress
        Session::flash('achievement', $event->progress->details->name);
    }
}