<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('provider_id');
            $table->string('provider');
            $table->string('name')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('avatar')->default('default.jpg');
            $table->text('description');
            $table->enum('specialist', ['Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte']);
            $table->string('password', 60);
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}