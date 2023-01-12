<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(10),
    ];
});
