<?php

namespace App\Http\Controllers;

use App\GiaoVienModel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiaoVienController extends Controller
{
    public function show($giaovien_id){
        $giaovien = GiaoVienModel::find($giaovien_id);
        return view("admin.detail_giaovien",compact("giaovien"));

    }
}
