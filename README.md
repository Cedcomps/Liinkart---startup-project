# LiinkART - La plateforme qui démocratise l'art en ligne

Application qui délivre: 
* Une galerie d'oeuvre
* Profil d'utilisateur complet
* Système de messagerie interne
* Système de gamification en place
* Moteur de recherche selon titre ou catégorie artistique
* Administration des oeuvres et membres

## Architecture
*    	"barryvdh/laravel-debugbar": "^2.4",
*      "barryvdh/laravel-dompdf": "^0.8.0",
*      "bestmomo/laravel-email-confirmation": "^1.0",
*     "cmgmyr/messenger": "^2.14",
*     "gstt/laravel-achievements": "^1.0",
*     "intervention/image": "^2.4",
*        "laravel/cashier": "~7.0",
*       "laravel/framework": "5.4.*",
*      "laravel/socialite": "^3.0",
*     "laravel/tinker": "~1.0",
*     "laravelcollective/html": "^5.4",
*      "skydiver/laravel-materialize-css": "dev-master",
*      "spatie/laravel-permission": "^1.12",
*     "uxweb/sweet-alert": "^1.4"

## Setup

FAKER: faker créé en place pour alimenter en oeuvres la galerie ainsi qu'en utilisateur
Le fichier .env.example est à renommer en .env et à éditer pour son bon fonctionnement en local

## Deployment
Keep in mind there is a .env file !

## Authors
Cédric COMPAGNON
### Durée 2 mois.

## USER STORY

> As a user I would like to connect via Facebook in order to create an account in the web app (socialite to be upgrade/app to update)
----
> As a user I would like to load more faster the web app so that easily to load it (compress IMG)
