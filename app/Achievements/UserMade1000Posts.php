<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMade1000Posts extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "1000 oeuvres";

    /*
     * A small description for the achievement
     */
    public $description = "Waouh! Vous avez déjà créer plus de 1000 oeuvres sur LiinkART!";

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 1000;
}
