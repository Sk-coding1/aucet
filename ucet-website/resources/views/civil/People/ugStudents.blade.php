@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')

<!-- ======= Students Section ======= -->
<section id="students" class="students section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>UG Students</h3>
        </div>
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="students-flters">
                    <li data-filter="*" class="filter-active">All Year</li>
                    <li data-filter=".filter-one" class="">1</li>
                    <li data-filter=".filter-two" class="">2</li>
                    <li data-filter=".filter-three" class="">3</li>
                    <li data-filter=".filter-four" class="">4</li>
                </ul>
            </div>
        </div>
        <div class="row students-container" data-aos="fade-up" data-aos-delay="500">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-one">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Person name</h5>
                        <h6>Reg No</h6>
                        <p>Dept (F)</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-two">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Person name</h5>
                        <h6>Reg No</h6>
                        <p>Dept (F)</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Person name</h5>
                        <h6>Reg No</h6>
                        <p>Dept (F)</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-four">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Person name</h5>
                        <h6>Reg No</h6>
                        <p>Dept (F)</p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section><!-- End Students Section -->

@endsection
@section('nav-active')
<script>
$(document).ready(function() { 
    $(".people").addClass("active");
    $(".ugstudents").addClass("active");
});
</script>
@endsection