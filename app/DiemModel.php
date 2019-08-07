<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiemModel extends Model
{
    protected $table = 'diem';
    protected $primaryKey = "diem_id";

    protected $fillable = [
        "madiem",
        "diemki1",
        "diemki2",
        "diemki3",
        "diemki4",
        "sinhvien_id",
    ];
}
