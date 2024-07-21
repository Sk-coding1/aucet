@extends('layouts.department')
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
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Aashika Beaula a</h5>
                        <h6>2022501046</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-four">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Aathithya M</h5>
                        <h6>2021501303</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Achudhavarman M S</h5>
                        <h6>2022501001</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-four">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Adhithya R</h5>
                        <h6>2021501002</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Agathish M</h5>
                        <h6>2022501003</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Aishwarya Ramachandran</h5>
                        <h6>2022501053</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-four">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Ajith R</h5>
                        <h6>2021501321</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-three">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Ajmal S</h5>
                        <h6>2022501310</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 students-item filter-four">
                <div class="single-student">
                    <div class="student-info">
                        <h5>Allen Devaraj a</h5>
                        <h6>2021501004</h6>
                        <p>AERO (F)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Students Section -->

@endsection