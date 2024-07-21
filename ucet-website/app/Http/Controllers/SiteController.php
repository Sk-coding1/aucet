<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function it(){
        return view('IT/it');
    }
    public function teaching(){
        return view('IT/teaching');
    }
    public function nonTeaching(){
        return view('IT/nonTeaching');
    }
    public function facilities(){
        return view('IT/facilities');
    }

    public function hod(){
        return view('administration/hod');
    }

    public function dean_office(){
        return view('administration/dean_office');
    }

    public function former_deans(){
        return view('administration/former_deans');
    }
}
