<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserCompletedProfile extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Profil complet";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Vous venez de complèter votre profil!";

	/*
     * Triggers whenever an Achiever unlocks this achievement
    */
    public function whenUnlocked($progress)
    {
        
    }
}
