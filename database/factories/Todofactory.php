<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'description'=> $faker->paragraph(1),
        'completed'=> false
        
    ];
});
