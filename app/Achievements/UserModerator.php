<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserModerator extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Membre engagé";

    /*
     * A small description for the achievement
     */
    public $description = "Un grand merci pour votre implication!";

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 100;
}
