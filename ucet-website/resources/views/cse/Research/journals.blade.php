@extends('layouts.department')
@section('title', 'Computer Science and Engineering')
@section('dept')

<!-- ======= Journals Section ======= -->
<section id="journals" class="publication section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Latest Journals (Scopus indexed)</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ol class="list">
                    <li class="mb-10">Name and Details <a href="#" target="_blank" class="cpoint" data-bs-toggle="tooltip" data-bs-placement="right" title="External link"><i class="bi bi-box-arrow-up-right font-18 "></i></a>.</li>

                    <li class="mb-10">Name and Details <a href="#" target="_blank" class="cpoint" data-bs-toggle="tooltip" data-bs-placement="right" title="External link"><i class="bi bi-box-arrow-up-right font-18 "></i></a>.</li>

                    <li class="mb-10">Name and Details <a href="#" target="_blank" class="cpoint" data-bs-toggle="tooltip" data-bs-placement="right" title="External link"><i class="bi bi-box-arrow-up-right font-18 "></i></a>.</li>

                    
                </ol>
            </div>
        </div>
    </div>
</section><!-- End Journals Section -->

@endsection
@section('nav-active')
<script>
    $(document).ready(function() {
        $(".research").addClass("active");
        $(".publication").addClass("active");
        $(".journals").addClass("active");
        
    });
</script>

@endsection