<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => 'admin',
        'mobile' => '0905428795',
        'email' => $faker->unique()->freeEmail,
        'email_verified_at' => now(),
        'password' => '$2b$10$3EM2SZC1yZcruLpmzbLDzuFZoIsL2ukH4RXziej7eK0J6moVgzQ6q', // password
        'image' => $faker->imageUrl(800, 600, 'cats', true, 'Faker'),
        'status' => $faker->randomDigitNot(3),
        'remember_token' => Str::random(10),
    ];

});
