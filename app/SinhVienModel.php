<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVienModel extends Model
{
    protected $table = "sinhvien";
    protected $primaryKey ="sinhvien_id";

    protected $fillable = ["masv", "ten", "ho", "gioitinh", "diachi", "email", "ngaysinh","lop_id","giaovien_id","sinhvien_image", "active",];

    public function getlop_tenlop()
    {
        return $this->hasOne("App\LopHocModel","lop_id","lop_id");
    }
    public function getlop_id()
    {
        return $this->belongsTo("App\LopHocModel", "lop_id", "lop_id");
    }
    public function getgiaovien_id()
    {
        return $this->belongsTo("App\GiaoVienModel","giaovien_id","giaovien_id");
    }
    public function getdiem_id()
    {
        return $this->belongsTo("App\DiemModel","sinhvien_id","diem_id");
    }




    public function lop()
    {
        return $this->belongsToMany("App\LopHocModel","giaovien","lop_id","giaovien_id");
    }

    public function lophoc()
    {
        return $this->belongsTo("App\ShowLopModel","lop_id","lophoc_id");
    }
}
