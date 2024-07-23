@extends('layouts.department')
@section('title', 'Information Technology')
@section('dept')

<!-- ======= Scholars Section ======= -->
<section id="Scholars" class="Scholars section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Scholars</h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="500">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-up">
                <div class="single-scholars">
                    <div class="scholars-img">
                        <img src="" alt="Profile Image">
                        <div class="social">
                            <a href="mailto:" data-bs-toggle="tooltip" data-bs-placement="right" title="mailid"><i class="bi bi-envelope-at-fill"></i></a>
                        </div>
                    </div>
                    <div class="scholars-info">
                        <h4> Person name</h4>
                        <span>Reg no</span>
                        <h5>Mode : Full Time</h5>
                        <h6>Supervisor: name</h6>
                        <p>about</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-up">
                <div class="single-scholars">
                    <div class="scholars-img">
                        <img src="" alt="Profile Image">
                        <div class="social">
                            <a href="mailto:" data-bs-toggle="tooltip" data-bs-placement="right" title="mailid"><i class="bi bi-envelope-at-fill"></i></a>
                        </div>
                    </div>
                    <div class="scholars-info">
                        <h4> Person name</h4>
                        <span>Reg no</span>
                        <h5>Mode : Full Time</h5>
                        <h6>Supervisor: name</h6>
                        <p>about</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Scholars Section -->

@endsection
@section('nav-active')
<script>
$(document).ready(function() { 
    $(".people").addClass("active");
    $(".scholars").addClass("active");
});
</script>
@endsection
