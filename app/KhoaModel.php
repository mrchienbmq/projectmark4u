<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoaModel extends Model
{
    protected $table ="khoa";
    protected $primaryKey = "khoa_id";

    protected $fillable = [
        "makhoa",
        "tenkhoa",
        "active",
    ];
}
