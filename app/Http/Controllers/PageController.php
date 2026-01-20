<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gewinne(){
        return view('main-pages.gewinne');
    }

    public function home(){
        return view('main-pages.home');
    }

    public function partner(){
        return view('main-pages.partner');
    }

    public function teilnahme(){
        return view('main-pages.teilnahme');
    }

    public function ueberuns(){
        return view('main-pages.ueberuns');
    }

}
