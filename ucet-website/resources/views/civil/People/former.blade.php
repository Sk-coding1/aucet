@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')

 <!-- ======= Former Academics Section ======= -->
<section id="formeracademics" class="formeracademics section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Former Academics</h3>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in">
                    <div class="pic"><img src="" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Person Name</h4>
                        <span>Assistant Professor</span>
                        <span>1989 - 2021</span>
                    </div>
                    <div class="social">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Former Academics Section -->

@endsection
@section('nav-active')
<script>
$(document).ready(function() { 
    $(".people").addClass("active");
    $(".formeracademics").addClass("active");
});
</script>
@endsection