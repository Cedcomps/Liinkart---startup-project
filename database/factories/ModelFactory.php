<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
		'name'           => $faker->name,
		'email'          => $faker->safeEmail,
		'password'       => bcrypt('secret'),
		'admin'          => $faker->boolean,
		'remember_token' => str_random(10),
    ];
});
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
		'titre'      => $faker->sentence(2),
		'contenu'    => $faker->paragraph(rand(8, 15)),
		'technique'  => $faker->randomElement($array = array ('Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Technique mixte', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Technique Mixte', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Technique Mixte', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte')),
		'theme'      => $faker->randomElement($array = array ('Animaux', 'Architecture', 'Fantastique', 'Femme', 'Floral', 'Insolite', 'Mer', 'Nature morte', 'Noir et blanc', 'Nu', 'Paysage', 'Portrait', 'Scène de Vie', 'Urbain', 'Voyage')),
		'style'      => $faker->randomElement($array = array ('Abstrait', 'Couleur', 'Cubiste', 'Expressionniste', 'Figuratif', 'Géométrique', 'Impressionniste', 'Noir et blanc', 'Pop Art', 'Street Art')),
		'created_at' => $faker->dateTimeThisYear(),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    $tag = $faker->unique()->word();
    return [
		'tag'     => $tag,
		'tag_url' => $tag,
    ];
});