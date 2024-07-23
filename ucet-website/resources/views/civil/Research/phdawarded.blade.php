@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')

 <!-- ======= Ph.D's Awarded Section ======= -->
<section id="phdawarded" class="phdawarded section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Ph.D's Awarded</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-awarded">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project Information</h6>
                            <p>Year : <span>2024</span></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Scholar Name : <span>Person Name</span></p>
                            <p>Supervisor Name : <span>Person Name</span></p>
                        </div>
                    </div>
                </div>

                <div class="single-awarded">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project Information</h6>
                            <p>Year : <span>2024</span></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Scholar Name : <span>Person Name</span></p>
                            <p>Supervisor Name : <span>Person Name</span></p>
                        </div>
                    </div>
                </div>

                <div class="single-awarded">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project Information</h6>
                            <p>Year : <span>2024</span></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Scholar Name : <span>Person Name</span></p>
                            <p>Supervisor Name : <span>Person Name</span></p>
                        </div>
                    </div>
                </div>

                


            </div>
        </div>
    </div>
</section><!-- End Ph.D's Awarded Section -->

@endsection
@section('nav-active')
<script>
    $(document).ready(function() {
        $(".research").addClass("active");
        $(".awarded").addClass("active");
        $(".phdawarded").addClass("active");
    });
</script>

@endsection