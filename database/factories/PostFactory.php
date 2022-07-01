<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(100),
        'image' => 'https://picsum.photos/200',
        'description' => $faker->realText(400)
    ];
});
