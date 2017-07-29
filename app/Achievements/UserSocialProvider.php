<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserSocialProvider extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Connecté depuis les réseaux sociaux";

    /*
     * A small description for the achievement
     */
    public $description = "Vous vous êtes connecté à LiinkART depuis les réseaux sociaux!";
}
