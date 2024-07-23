@extends('layouts.department')
@section('title', 'Computer Science and Engineering')
@section('dept')

 <!-- ======= Courses Offered Section ======= -->
<section id="coursesoffered" class="coursesoffered section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3>Courses Offered</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="section-sub-title" data-aos="fade-up">
                    <h3>UG Courses</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover  table-bordered mb-4">
                        <thead class="table-primary" style="text-align: center !important;">
                            <tr class="fs-5">
                                <th colspan="2">UG Full-time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="15%">
                                    <a href="javascript:void(0);" onclick="openPdf('https://www.auegov.ac.in/Department/public/assets/PDF/R/2023U.GF11.pdf', 'Infomation Technology' , 'https://www.auegov.ac.in/Department/public/assets/img/favicon.png');"> Regulation 2023</a>
                                </td>
                                <td width="85%">
                                    <a href="javascript:void(0);" onclick="openPdf('https://www.auegov.ac.in/Department/public/assets/PDF/C/2023/501.pdf', 'Infomation Technology' , 'https://www.auegov.ac.in/Department/public/assets/img/favicon.png');"> B.Tech. Infomation Technology</a><br>
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <a href="javascript:void(0);" onclick="openPdf('https://www.auegov.ac.in/Department/public/assets/PDF/R/2019U.GF11.pdf', 'Infomation Technology' , 'https://www.auegov.ac.in/Department/public/assets/img/favicon.png');"> Regulation 2019</a>
                                </td>
                                <td width="85%">
                                    <a href="javascript:void(0);" onclick="openPdf('https://www.auegov.ac.in/Department/public/assets/PDF/C/2019/501.pdf', 'Infomation Technology' , 'https://www.auegov.ac.in/Department/public/assets/img/favicon.png');"> B.Tech. Infomation Technology</a><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Courses Offered Section -->

@endsection
@section('nav-active')
    <script>
            $(document).ready(function() { $(document).ready(function() { $(".academic").addClass("active");
        $(".coursesoffered").addClass("active"); }); });
    </script>
@endsection