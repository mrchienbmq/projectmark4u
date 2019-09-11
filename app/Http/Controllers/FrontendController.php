<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home(){
        return view("front-end.index");
    }
    public function Blog(){
        return view("front-end.blog");
    }
    public function About_us(){
        return view("front-end.about-us");
    }
    public function Courses(){
        return view("front-end.courses");
    }
    public function Contact(){
        return view("front-end.contact");
    }
}
