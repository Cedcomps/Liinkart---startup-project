<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserConnectedSlack extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Connecté au Slack";

    /*
     * A small description for the achievement
     */
    public $description = "Bravo! Vous êtes maintenant connecté au Slack de LiinkART!";
}
