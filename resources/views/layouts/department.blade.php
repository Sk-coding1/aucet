<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Department">
    <meta name="author" content="Sathish Kumar">
    <meta name="keywords" content="Department">
    <title>@yield('title','University College of Engineering Tindivanam')</title>
    <!-- Favicons -->
    <link href="{{asset('home/img/anna_univ_logo.png')}}" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('department/css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('department/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('department/css/bootstrap-icons.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="{{asset('department/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('department/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('department/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('department/css/animate.min.css')}}" rel="stylesheet">
    <!--Main CSS File -->
    <link href="{{asset('department/css/styleV11.css')}}" rel="stylesheet">
    <link href="{{asset('department/css/campus3.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="topbar-logo d-md-flex align-items-center">
                <a href="/Department/it"><img src="{{asset('home/img/anna_logo_grey.png')}}" alt="Logo"></a>
                <div class="logo-text">
                    <h2 class="logotxt">@yield('title', '')</h2>
                    <h4 class="sublogotxt">Anna University</h4>
                </div>
            </div>
            <div class="contact-info d-flex">
                <i class="bi bi-envelope mt-1"><a href="mailto:">mail.gmail.com</a></i>
                <i class="bi bi-phone mt-1"><a href="tel:4422516179">044 2251 6179</a></i>
                <div class="social-links mt-1">
                    <a href="" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="" target="_blank" class="facebook ms-3"><i class="bi bi-facebook"></i></a>
                    <a href="" target="_blank" class="instagram ms-3"><i class="bi bi-instagram"></i></a>
                    <a href="" target="_blank" class="youtube ms-3"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center backdrop">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="marquee">
                <p>
                    <a href="">Payment of Semester Fee for University Departments - All higher semesters for academic session ODD SEMESTER 2024 - 2025 (Last Date:25-Jul-2024)</a>
                    <a href="">FLIGHT'24</a>
                </p>
            </div> 
            <!-- .navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class='nav-link scrollto home' href='/Department/{{ $department }}'>Home</a></li>

                    <li class='dropdown'><a class='academic' href='#'><span>Academic</span><i class='bi bi-chevron-down'></i></a>
                        <ul>
                            <li><a class='coursesoffered' href='/Department/{{ $department }}/coursesoffered'>Courses Offered</a></li>
                            <li><a class='academicschedule' href='/Department/{{ $department }}/academics-schedule'>Academic Schedule</a></li>
                        </ul>
                    </li>

                    <li class='dropdown'><a class='people' href='#'><span>People</span><i class='bi bi-chevron-down'></i></a>
                        <ul>
                            <li><a class='teaching' href='/Department/{{ $department }}/teaching-staff'>Teaching</a></li>
                            <li><a class='nonteaching' href='/Department/{{ $department }}/non-teaching'>Non-Teaching</a></li>
                            <li><a class='scholars' href='/Department/{{ $department }}/scholars'>Scholars</a></li>
                            <li><a class='ugstudents' href='/Department/{{ $department }}/ugstudents'>UG Students</a></li>
                            <li><a class='notablealumni' href='/Department/{{ $department }}/alumni'>Notable Alumni</a></li>
                            <li><a class='formeracademics' href='/Department/{{ $department }}/former-academics'>Former Academics</a></li>
                        </ul>
                    </li>

                    <li class='dropdown'><a class='research' href='#'><span>Research</span><i class='bi bi-chevron-down'></i></a>
                        <ul>
                            <li class='dropdown'><a class='awarded' href='#'><span>Awarded</span><i class='bi bi-chevron-right'></i></a>
                                <ul>
                                    <li><a class='phdawarded' href='/Department/{{ $department }}/phdawarded'>Ph.D</a></li>
                                </ul>
                            </li>
                            <li class='dropdown'><a class='publication' href='#'><span>Publication</span><i class='bi bi-chevron-right'></i></a>
                                <ul>
                                    <li><a class='journals' href='/Department/{{ $department }}/journals'>Journals</a></li>
                                    <li><a class='conferences' href='/Department/{{ $department }}/conferences'>Conferences</a></li>
                                </ul>
                            </li>
                            <li><a class='projects' href='/Department/{{ $department }}/projects'>Projects</a></li>
                            <li><a class='consultancy' href='/Department/{{ $department }}/consultancy'>Consultancy</a></li>
                            <li><a class='patents' href='/Department/{{ $department }}/patents'>Patents</a></li>
                        </ul>
                    </li>

                    <li><a class='deptfacilities' href='/Department/{{ $department }}/facilities'>Facilities</a></li>
                    <li class='dropdown'><a class='achievements' href='#'><span>Achievements</span><i class='bi bi-chevron-down'></i></a>
                        <ul>
                            <li><a class='placement' href='#'>Placement</a></li>
                        </ul>
                    </li>
                    <li class='dropdown'><a class='others' href='#'><span>Others</span><i class='bi bi-chevron-down'></i></a>
                        <ul>
                            <li><a class='gallery' href='#'>Photo Gallery</a></li>
                            <li><a class='videogallery' href='#'>Video Gallery</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <main id="main">
        @yield('dept')

    </main><!-- End #main -->
        <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container ">
                <div class="d-flex justify-content-between">
                    <h3 data-aos="flip-down">Department of <span> @yield('title', '')</span></h3>
                    <h5 class="align-middle text-center " data-aos="fade-up">Visit Count <span data-purecounter-start="0" data-purecounter-end="8567" data-purecounter-duration="2" class="purecounter"> 8567</span></h5>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-contact" data-aos="fade-right">
                        <p class="wrap-int"><i class="bi bi-geo-alt-fill me-2 wrap-int-bi"></i>UCET Campus, Tindivanam, </p>
                        <p class="wrap-int ms-4">Anna University, Chennai - 600044</p><br>
                        <p class="wrap-int"><i class="bi bi-telephone-fill me-2 wrap-int-bi"></i><a href="tel:4422516179">044 2251 6179</a></p>
                        <p class="wrap-int"><i class="bi bi-envelope-at-fill me-2 wrap-int-bi"></i><a href="mailto:mparams@mitindia.edu">mparams@mitindia.edu</a></p><br>
                        <h4 class="mt-3">Our Social Networks</h4>
                        <div class="social-links">
                            <a href="" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-links" data-aos="fade-down">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Anna University</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">MIT Campus</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Centre for e-Governance</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Controller of Examination</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Additional Controller of Examination</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Centre for Academic Courses</a></li>
                            <li><i class="bi bi-caret-right"></i> <a href="" target="_blank">Centre for Student Affairs</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 footer-links" data-aos="zoom-in">
                        <h4>Our Map Link</h4>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.788859614147!2d79.65647907410886!3d12.262562930028597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a533f485e9d40b9%3A0x34d3dc2d9604b1bb!2sUniversity%20College%20of%20Engineering%20Tindivanam!5e0!3m2!1sen!2sin!4v1721545347201!5m2!1sen!2sin" width="100%" height="200" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright 2024 ,<strong><span><a href="/"> UCET </a></span></strong> ,Anna University - All rights reserved.
            </div>
            <div class="credits">
                Designed & Developed by Ucet Web Team
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Modal -->
    <div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreTitle">Modal title</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="readMoreDescription"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS Files -->
    <script src="{{asset('department/js/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('department/js/aos.js')}}"></script>
    <script src="{{asset('department/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('department/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('department/js/popper.min.js')}}"></script>
    <script src="{{asset('department/js/glightbox.min.js')}}"></script>
    <script src="{{asset('department/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('department/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('department/js/noframework.waypoints.js')}}"></script>
    <script src="{{asset('department/js/validate.js')}}"></script>
    <script src="{{asset('department/js/wow.min.js')}}"></script>
    <!-- Main jquery File -->
    <script language="JavaScript" type="text/javascript" src="{{asset('department/js/jquery.min.js')}}"></script>
    <!--Main JS File -->
    <script src="{{asset('department/js/main.js')}}"></script>
    <script>
    $(document).ready(function() { var deptCamp = "61~3~AEROSPACE";
        UpdateAccessedCount(deptCamp); });

    function UpdateAccessedCount(deptCamp) { var requestStatus;
        $.ajax({ type: "POST", dataType: "json", data: { deptCamp: deptCamp }, url: "https://www.auegov.ac.in/Department/Home/UpdateAccessedCount", beforeSend: function() { requestStatus = 0; }, success: function(data) { if (data.status == 1) { console.log('Updated'); } }, async: true }).responseText; }
    </script>
    <script>
    

    function ReadMore(readMoreValue) { var requestStatus;
        $.ajax({ type: "POST", dataType: "json", data: { readMoreValue: readMoreValue }, url: "https://www.auegov.ac.in/Department/Home/ReadMore", beforeSend: function() { requestStatus = 0; }, success: function(data) { if (data.status == 1) { $("#readMoreTitle").html(data.title);
                    $("#readMoreDescription").html(data.description);
                    $("#readMoreModal").modal("show"); } }, async: true }).responseText; }

    function openPdf(path, title, favicon) { console.log(favicon); var newWindow = window.open(); var htmlContent = ` <!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta content="width=device-width, initial-scale=1.0" name="viewport"> <meta name="description" content="Department"> <meta name="author" content="Mohamed Rasik Farid"> <meta name="keywords" content="Department"> <title>${title}</title> <link rel='icon' type='image/png' href='${favicon}'/> <style> body, html { margin: 0; padding: 0; height: 100%; overflow: hidden; } </style> </head> <body> <embed width="100%" height="100%" name="plugin" src="${path}" type="application/pdf" internalinstanceid="21"> </body> </html> `;
    newWindow.document.write(htmlContent);
    newWindow.document.close(); }
    </script>
   
   @yield('nav-active')
</body>

</html>