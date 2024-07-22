@extends('layouts.department')
@section('title', 'Computer Science and Engineering')
@section('dept')

<!-- ======= Projects Section ======= -->
<section id="projects" class="projects section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Projects</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="single-projects">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project details</h6>
                            <p>Principle Investigator : <span>Person name</span></p>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Duration : <span>20-SEP-17 to 19-SEP-19</span></p>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="single-projects">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project details</h6>
                            <p>Principle Investigator : <span>Person name</span></p>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Duration : <span>20-SEP-17 to 19-SEP-19</span></p>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="single-projects">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Project details</h6>
                            <p>Principle Investigator : <span>Person name</span></p>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Duration : <span>20-SEP-17 to 19-SEP-19</span></p>
                            <p></p>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</section><!-- End Projects Section -->
@endsection
@section('nav-active')
<script>
    $(document).ready(function() {
        $(".research").addClass("active");
        $(".projects").addClass("active");
        
    });
</script>

@endsection