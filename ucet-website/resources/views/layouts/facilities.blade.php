<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Department">
    <meta name="author" content="Keerthi Kumar">
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
                    <h2 class="logotxt">@yield('title_bar', '')</h2>
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
            <!-- Content -->
                @yield('facilities_content')
            <!-- Content -->
        </div>