<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMadeAPost extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Première oeuvre";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Vous venez de créer votre première oeuvre sur LiinkART!";
}
