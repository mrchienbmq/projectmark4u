<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view("auth.login");
    }

        function postLogin(Request $request)
        {
            $rules = [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ];
            $messeges = [
                'email.required' => " Email là bắt buộc ",
                'email.email' => " Email là bắt buộc ",

                'password.required' => " Password Là bắt buộc",
                'password.min' => " Password Tối thiểu 8 kí tự",
            ];
            $validator = Validator::make($request->all(), $rules, $messeges);
            if ($validator -> fails()){
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $email = $request->input("email");
                $password = $request->input("password");

                if (Auth::attempt(["email" => $email, "password" => $password])) {
                    return redirect()->intended("/admin");
                } else {
                    return redirect()->back();
                }
            }
        }
}