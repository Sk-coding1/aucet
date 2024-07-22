<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /* Home Page */
    public function index(){
        return view('home/index');
    }

    public function policies(){
        return view('home/policies');
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


//Department - IT
    public function dept($department){
        return view("{$department}/{$department}",['department' => $department]);
    }


    //People page
    public function teaching($department){
        return view("{$department}/People/teaching",['department' => $department]);
    }
    public function nonTeaching($department){
        return view("{$department}/People/nonTeaching",['department' => $department]);
    }
    public function facilities($department){
        return view("{$department}/facilities",['department' => $department]);
    }
  
    public function scholars($department){
        return view("{$department}/People/scholars",['department' => $department]);
    }
    public function ugStudents($department){
        return view("{$department}/People/ugStudents",['department' => $department]);
    }
    public function alumni($department){
        return view("{$department}/People/alumni",['department' => $department]);
    }
    public function former($department){
        return view("{$department}/People/former",['department' => $department]);
    }
    //Academic Page
    public function academics_schedule($department){
        return view("{$department}/Academics/academicschedule",['department' => $department]);
    }
    public function courses_offered($department){
        return view("{$department}/Academics/coursesoffered",['department' => $department]);
    }

    //Research Page
    public function phd_awarded($department){
        return view("{$department}/Research/phdawarded",['department' => $department]);
    }
    public function journals($department){
        return view("{$department}/Research/journals",['department' => $department]);
    }
    public function conferences($department){
        return view("{$department}/Research/conferences",['department' => $department]);
    }
    public function projects($department){
        return view("{$department}/Research/projects",['department' => $department]);
    }
    public function consultancy($department){
        return view("{$department}/Research/consultancy",['department' => $department]);
    }
    public function patents($department){
        return view("{$department}/Research/patents",['department' => $department]);
    }
// End of IT



}