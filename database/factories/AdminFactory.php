<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'name' => "Admin",
        'type' => 'admin',
        'mobile' => '0905428795',
        'email' => 'admin@gmail.com',
        'password' => '$2b$10$3EM2SZC1yZcruLpmzbLDzuFZoIsL2ukH4RXziej7eK0J6moVgzQ6q', // password
        'image' => "https://avatarfiles.alphacoders.com/183/thumb-183310.jpg",
        'status' => "1",
        'remember_token' => Str::random(10),
    ];

});
