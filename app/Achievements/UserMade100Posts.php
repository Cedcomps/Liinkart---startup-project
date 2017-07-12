<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMade100Posts extends Achievement
{
     /*
     * The achievement name
     */
    public $name = "100 oeuvres";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Vous venez de créer votre 100ème oeuvre sur LiinkART, la notoriété est présente!";

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 100;
}
