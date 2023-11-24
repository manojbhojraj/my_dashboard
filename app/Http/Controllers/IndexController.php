<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function indexDashboard(){
        return view('web.pages.index')->with('title','Dashboard');
    }

    public function buttons() {
        return view('web.pages.buttons')->with('title','Buttons');
    }

    public function dropdown(){
        return view('web.pages.dropdown')->with('title','Dropdown');
    }

    public function typography(){
        return view('web.pages.typography')->with('title','Typography');
    }

    public function blankpage(){
        return view('web.pages.samples.blank_page')->with("title",'Blank Page');
    }

    public function error404(){
        return view('web.pages.samples.error-404')->with("title",'404');
    }

    public function login(){
        return view('web.pages.login')->with('title','Login');
    }

    public function register(){
        return view('web.pages.register')->with('title','Register');
    }

    public function icons(){
        return view('web.pages.icons')->with('title','Icons');
    }

    public function charts(){
        return view('web.pages.charts')->with('title','Apex Charts');
    }
}
