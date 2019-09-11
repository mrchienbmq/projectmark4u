<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SinhVienModel::class, function (Faker $faker) {
    return [
        "masv" => $faker -> unique() -> postcode,
        "ten" => $faker -> firstName,
        "ho" => $faker ->lastName,
        "gioitinh" => $faker ->boolean,
        "diachi" => $faker ->address,
        "email" => $faker -> email,
        "ngaysinh" => $faker ->date(),
        "lop_id" =>$faker -> randomFloat(0,1,10),
        /*"giaovien_id" =>$faker -> randomFloat(0,1,10),*/

    ];
});
