@extends('layouts.department')
@section('title', 'Information Technology')
@section('dept')

<!-- ======= Patents Section ======= -->
<section id="patents" class="patents section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Patents</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="single-patents">
                    <div class="row">
                        <div class="col-lg-9">
                            <h6>Details</h6>
                            <p>Authors : <span>Names</span></p>
                        </div>
                        <div class="col-lg-3">
                            <p>Patent Number : <span>530286</span></p>
                            <p><span>INDIA, 2024</span></p>
                        </div>
                    </div>
                </div>

                <div class="single-patents">
                    <div class="row">
                        <div class="col-lg-9">
                            <h6>Details</h6>
                            <p>Authors : <span>Names</span></p>
                        </div>
                        <div class="col-lg-3">
                            <p>Patent Number : <span>530286</span></p>
                            <p><span>INDIA, 2024</span></p>
                        </div>
                    </div>
                </div>

                <div class="single-patents">
                    <div class="row">
                        <div class="col-lg-9">
                            <h6>Details</h6>
                            <p>Authors : <span>Names</span></p>
                        </div>
                        <div class="col-lg-3">
                            <p>Patent Number : <span>530286</span></p>
                            <p><span>INDIA, 2024</span></p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section><!-- End Patents Section -->

@endsection
@section('nav-active')
<script>
    $(document).ready(function() {
        $(".research").addClass("active");
        $(".patents").addClass("active");
        
    });
</script>

@endsection