@extends('layouts.department')
@section('title', 'Civil Engineering')
@section('dept')

<!-- ======= consultancy Section ======= -->
<section id="consultancy" class="consultancy section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Consultancy</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-consultancy">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>Details</h6>
                            <p>Coordinator : <span>Name</span></p>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Duration : <span>04-JUL-13 to 03-OCT-13</span></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End consultancy Section -->

@endsection
@section('nav-active')
<script>
    $(document).ready(function() {
        $(".research").addClass("active");
        $(".consultancy").addClass("active");
        
    });
</script>

@endsection