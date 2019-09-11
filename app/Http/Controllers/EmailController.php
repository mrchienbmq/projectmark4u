<?php

namespace App\Http\Controllers;

use App\EmailModel;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function EmailCreate(){
        return view("front-end.index");
    }
    public function EmailSave(Request $request){
        $this->validate($request,[
            "email"=>  "required|min:5|max:30|",
           "fullname"=>  "required|min:2|max:100|",
            "phonenumber" => "required|min:8|max:100|",
        ]);
        EmailModel::create([
            "email" => $request ->get("email"),
            "fullname" => $request ->get("fullname"),
            "phonenumber" => $request ->get("phonenumber"),
        ])->save();
        return redirect("home")->with("message","Đăng kí thành công");
    }

    public function show(){
        $emails = EmailModel::all();

        $emails = EmailModel::orderBy("email_id","asc")->paginate(5);
        return view("admin.email_register",compact("emails"));
    }
}
