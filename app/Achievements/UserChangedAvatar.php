<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserChangedAvatar extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Avatar ajouté";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Maintenant nous pouvons mettre un visage à l'artiste!";
}
