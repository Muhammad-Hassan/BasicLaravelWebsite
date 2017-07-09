<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHomeView(){
        return view('home');
    }

    public function getAboutView(){
        return view('about');
    }

    public function getContactView(){
        return view('contact');
    }
}
