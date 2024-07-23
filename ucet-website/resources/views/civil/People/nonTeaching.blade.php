@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')
<!-- ======= NonTeaching Section ======= -->
<section id="NonTeaching" class="NonTeaching section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Non-Teaching</h3>
        </div>
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-out-up">
                <div class="single-staff">
                    <div class="staff-image-wrapper">
                        <div class="staff-image">
                            <img src="" alt="staff-image">
                        </div>
                    </div>
                    <div class="staff-info">
                        <h5>Mrs.S.Gomathi</h5>
                        <h6>Technical Assistant</h6>
                    </div>
                    <div class="staff-socials">
                        <a class='hoverTool' href="" id="1~3~z7JxR0qz"><i class="bi bi-telephone-fill"></i></a>
                        <a class='hoverTool' href="mailto:goomvarthini16@gmail.com" id="2~3~z7JxR0qz"><i class="bi bi-envelope-at-fill"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-out-up">
                <div class="single-staff">
                    <div class="staff-image-wrapper">
                        <div class="staff-image">
                            <img src="" alt="staff-image">
                        </div>
                    </div>
                    <div class="staff-info">
                        <h5>Mr.M.Kathavarayan</h5>
                        <h6>Lab Assistant</h6>
                    </div>
                    <div class="staff-socials">
                        <a class='hoverTool' href="" id="1~3~wbJ5R04="><i class="bi bi-telephone-fill"></i></a>
                        <a class='hoverTool' href="mailto:mmkathavarayan@gmail.com" id="2~3~wbJ5R04="><i class="bi bi-envelope-at-fill"></i></a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    </div>
    </div>
</section><!-- End NonTeaching Section -->
@endsection
@section('nav-active')
<script>
$(document).ready(function() { 
    $(".people").addClass("active");
    $(".nonteaching").addClass("active");
});
</script>
@endsection
