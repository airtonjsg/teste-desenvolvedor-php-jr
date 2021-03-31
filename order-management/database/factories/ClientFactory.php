<?php

use Faker\Generator as Faker;
use App\Models\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail->unique(),
        'cpf' => $faker->cpf->unique(),
    ];
});
