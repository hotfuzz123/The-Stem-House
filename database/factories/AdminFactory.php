<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'name' => "Admin",
        'type' => 'admin',
        'mobile' => '0905428795',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('123456'), // password
        'image' => "https://avatarfiles.alphacoders.com/183/thumb-183310.jpg",
        'status' => "1",
        'remember_token' => Str::random(10),
    ];

});
