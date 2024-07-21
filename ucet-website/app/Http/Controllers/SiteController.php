<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
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
}
