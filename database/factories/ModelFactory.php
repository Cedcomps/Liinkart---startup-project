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
$faker = Faker\Factory::create('fr_FR');
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
		'name'           => $faker->name,
		'country'        => $faker->country,
		'city'           => $faker->city,
		'email'          => $faker->safeEmail,
		'description'    => $faker->paragraph($nb = 3, $asText = false) ,
		'specialist'     => $faker->randomElement(['Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Technique mixte', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Technique Mixte', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Technique Mixte', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte']),
		'password'       => bcrypt('secret'),
		'admin'          => $faker->boolean,
		'remember_token' => str_random(10),
    ];
});
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
		'titre'      => $faker->sentence(2),
		'contenu'    => $faker->paragraph(rand(20, 75)),
		'year'       => $faker->year($max = 'now'),
		'largeur'    => $faker->numberBetween($min = 10, $max = 5000),
		'longueur'   => $faker->numberBetween($min = 10, $max = 5000),
		'hauteur'    => $faker->numberBetween($min = 10, $max = 5000),
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
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $category = $faker->unique()->word();
    return [
		'category'     => $category,
		'category_url' => $category,
    ];
});