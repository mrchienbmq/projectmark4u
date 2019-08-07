<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHocModel extends Model
{
    protected $table = "monhoc";
    protected $primaryKey = "monhoc_id";

    protected $fillable = [
        "mamon",
        "tenmon",
        "sotinchi",
        "sotiet",
        "active",

    ];
}
