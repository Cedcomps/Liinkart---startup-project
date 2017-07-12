<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMade10Posts extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "10 oeuvres";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Déjà votre dixième oeuvre sur LiinkART, continuez ainsi!";

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 10;
}
