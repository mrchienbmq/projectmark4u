<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVienModel extends Model
{
    protected $table = "sinhvien";
    protected $primaryKey ="sinhvien_id";

    protected $fillable = [

        "masv",
        "ten",
        "ho",
        "gioitinh",
        "diachi",
        "email",
        "ngaysinh",
        "lop_id",
        "sinhvien_image",
        "active",
    ];

    public function getlop_id(){
        return $this->belongsTo("App\LopHocModel","lop_id","lop_id");
    }
}
