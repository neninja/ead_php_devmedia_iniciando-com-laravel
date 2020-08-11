<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livro;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Livro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->text(150),
        'descricao' => $faker->text(150)
        // postgresql:
        // value too long for type character varying(255) (SQL: insert into "livros" ("titulo", "descricao", "updated_at", "created_at") values (Modi consectetur totam doloremque numquam vel. Explicabo dolor voluptatem velit dolorem. Quia voluptas dolorum quo est eos facere., Blanditiis ut quos voluptates ut vitae sed et a. Molestiae eligendi dolores ipsam doloremque dolores alias. Iusto iusto suscipit fugit consequatur et laboriosam animi. Esse impedit sequi omnis odit voluptatum deserunt. Est tenetur eum rerum laudantium unde occaecati., 2020-08-11 04:48:34, 2020-08-11 04:48:34) returning "id")
        // 'titulo' => $faker->paragraph,
    ];
});
