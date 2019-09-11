<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ShowLopModel::class, function (Faker $faker) {
    return [
        "giaovien_id" => $faker ->randomFloat(0,1,10),
        "title" => $faker -> realText(50),
    ];
});
