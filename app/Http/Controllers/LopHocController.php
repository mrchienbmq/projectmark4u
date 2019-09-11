<?php

namespace App\Http\Controllers;

use App\DiemModel;
use App\SinhVienModel;
use Illuminate\Http\Request;

class LopHocController extends Controller
{
    public function show($sinhvien_id){
        $sinhvien = SinhVienModel::find($sinhvien_id);
        return view("admin.detail",compact("sinhvien"));
    }
    public function DiemSinhVien($sinhvien_id){
        $sinhvien = SinhVienModel::find($sinhvien_id);
        $diem = DiemModel::find($sinhvien_id);
        return view("admin.diemsinhvien",compact("sinhvien","diem"));
    }




}
