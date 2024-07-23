@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')
<!-- ======= Notable Alumni Section ======= -->
<section id="notablealumni" class="notablealumni section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Notable Alumni</h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="500">

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="" class="img-fluid" alt="">
                    <h4>Person 1 </h4>
                    <p>Designation</p>
                    <span>
                        UG
                        - Batch</span>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="" class="img-fluid" alt="">
                    <h4>Person 2 </h4>
                    <p>Designation</p>
                    <span>
                        UG
                        - Batch</span>
                </div>
            </div>


            

        </div>
    </div>
</section>
<!-- End Notable Alumni Section -->

@endsection
@section('nav-active')
<script>
$(document).ready(function() { 
    $(".people").addClass("active");
    $(".notablealumni").addClass("active");
});
</script>
@endsection