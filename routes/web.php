<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get("login","LoginController@getLogin")->name("login");
Route::post("login","LoginController@postLogin")->name("login");

/*Route::get("teacher/login","LoginController@getLogin")->name("login");
Route::post("teacher/login","LoginController@postLogin")->name("login");*/

Route::group(["middleware"=>"teacher"],function (){
   Route::get("admin","HomeController@index")->name("dashboard");
});

Route::get("home/follow","EmailController@EmailCreate");
Route::post("home/follow","EmailController@EmailSave");


Route::group(["middleware"=>"admin.auth"],function () {
    Route::get("email","EmailController@show")->name("email");
    Route::get("admin", "HomeController@index")->name("dashboard");

    Route::get("charts", "PagesController@charts")->name("charts");
    Route::get("table", "PagesController@tables")->name("tables");

    Route::get("lophoc","QuanLiLopHocController@lophoc")->name("lophoc");
    Route::get("lophoc/edit","QuanLiLopHocController@LopHocEdit");
    Route::post("lophoc/edit","QuanLiLopHocController@LopHocUpdate");
    Route::get("lop/detail/{lop_id}","QuanLiLopHocController@show");
    Route::get("lophoc/delete/{lop_id}","QuanLiLopHocController@LopHocDelete");
    Route::get("lophoc/create","QuanLiLopHocController@LopHocCreate");
    Route::post("lophoc/create","QuanLiLopHocController@LopHocSave");
    Route::get("lophoc/sinhvien/{lop_id}","QuanLiLopHocController@SinhVienLopHoc");

    Route::get("monhoc","MonHocController@MonHoc")->name("monhoc");
    Route::get("monhoc/edit","MonHocController@MonHocEdit");
    Route::post("monhoc/edit","MonHocController@MonHocUpdate");


    Route::get("sinhvien/create","PagesController@SinhVienCreate");
    Route::post("sinhvien/create","PagesController@SinhVienSave");
    Route::get("sinhvien/edit","PagesController@SinhVienEdit");
    Route::post("sinhvien/edit","PagesController@SinhVienUpdate");

    Route::get("giaovien/edit","PagesController@GiaoVienEdit");
    Route::post("giaovien/edit","PagesController@GiaoVienUpdate");
    Route::get("giaovien","PagesController@giaovien")->name("giaovien");
    Route::get("giaovien/create","PagesController@GiaoVienCreate");
    Route::post("giaovien/create","PagesController@GiaoVienSave");


    Route::get("register", "PagesController@register")->name("register");
    Route::get("forgot-password", "PagesController@forgotps")->name("forgot-password");
    Route::get("404", "PagesController@erros404")->name("404");

    Route::get("giaovien/delete/{giaovien_id}","PagesController@GiaoVienDelete");

    Route::get("sinhvien/delete/{sinhvien_id}","PagesController@SinhVienDelete");

    Route::get("sinhvien/detail/{sinhvien_id}", "LopHocController@show");
    Route::get("sinhvien/diem/{sinhvien_id}","LopHocController@DiemSinhVien");


    Route::get("giaovien/detail/{giaovien_id}","GiaoVienController@show");

});



Route::get("home","FrontendController@Home")->name("home");
Route::get("blog","FrontendController@Blog")->name("blog");
Route::get("about-us","FrontendController@About_us")->name("about-us");
Route::get("courses","FrontendController@Courses")->name("courses");
Route::get("contact","FrontendController@Contact")->name("contact");


