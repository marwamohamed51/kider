<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Home";
        return view('home', compact('title'));
    }
    public function team(){
        $title = "Home";
        return view('team', compact('title'));
    }
    public function error(){
        $title = "Home";
        return view('error', compact('title'));
    }
    public function about(){
        $title = "Home";
        return view('about', compact('title'));
    }
    public function appointment(){
        $title = "Home";
        return view('appointment', compact('title'));
    }
    public function calltoaction(){
        $title = "Home";
        return view('calltoaction', compact('title'));
    }
    public function classes(){
        $title = "Home";
        return view('classes', compact('title'));
    }
    public function contact(){
        $title = "Home";
        return view('contact', compact('title'));
    }
    public function facility(){
        $title = "Home";
        return view('facility', compact('title'));
    }
    public function testimonial(){
        $title = "Home";
        return view('testimonial', compact('title'));
    }
}
