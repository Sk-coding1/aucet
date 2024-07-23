@extends('layouts.app')
@section('title','Head of the Departments')
@section('main')
<div>
    <div class="dept-container">
        <div class="title">Head of the Departments</div>
        <div class="dept-wrapper">
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/aerospace', '_blank')">
                <div class="svg-container" style="background-color: #9848FF">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Dr. R. Gopinath</div>
                    <div class="description">Civil Engineering</div>
                </div>
            </div>
            <div class="dept-card noselect" onclick="window.open('https://www.auegov.ac.in/Department/auto', '_blank')">
                <div class="svg-container" style="background-color: red">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Dr. L Jegatha Deborah</div>
                    <div class="description">Computer Science and Engineering</div>
                </div>
            </div>
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/elect', '_blank')">
                <div class="svg-container" style="background-color: #F94C10">
                    <i class="fas fa-microchip"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Dr. K. Vengatalakshmi</div>
                    <div class="description">Electronics and Communication <br> Engineering</div>
                </div>
            </div>
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/instru', '_blank')">
                <div class="svg-container" style="background-color: #F31559">
                    <i class="fas fa-code"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Dr. S. Milton Ganesh</div>
                    <div class="description">Information Technology</div>
                </div>
            </div>
            <div class="dept-card noselect" onclick="window.open('https://www.auegov.ac.in/Department/prod', '_blank')">
                <div class="svg-container" style="background-color: #F8DE22">
                    <i class="fas fa-atom"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Sr. S. Sivasubramaniyan</div>
                    <div class="description">Science and Humanities</div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection