<!DOCTYPE html>

<head>
<link rel="icon" type="image/x-icon" href="{{asset('home/img/anna_univ_logo.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('home/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/banner.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/marquee.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/numbercount.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/horizontalcards.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/centre.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/dean.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/visionmission.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/categoryCards.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/textinput.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/social.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<html>
<div id="root">
    <section class="app-container">
        <div class="modal-container open hidden">
            <div class="modal open">
                <div class="modal-header noselect">
                    <div class="left"></div>
                    <div class="close-button" onclick="hideModal()">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M368 368L144 144m224 0L144 368"></path>
                        </svg>
                    </div>
                </div>
                
                   
            </div>
        </div>

    
        <header class="header-container noselect">
            <div class="header-top">
                <a class="active" href="/" aria-current="page">
                    <h1 class="HeaderLogo">
                        <img src="{{asset('home/img/anna_univ_logo.png')}}">
                        <!-- 
                        <img src="/src/assets/75.jpeg" style="padding-left: 10%;"> -->
                    </h1>
                </a>
                <div class="login-mobile-btn" onclick="trigger()"></div>
                <div class="burger-menu"><span class="sus "></span><span class="sus "></span><span class="sus "></span>
                </div>
                <nav>
                    <ul class="menus nohighlights noselect ">
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="active" aria-current="page" class="home">Home</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown  ">
                                <li class="menu-items"><a class="" target="_blank" href="https://www.annauniv.edu/">AU
                                        Home</a></li>
                                <li class="menu-items"><a class="" href="/">UCET Home</a></li>
                                <li class="menu-items"><a class="" href="/about">About UCET</a></li>
                                <li class="menu-items"><a class="" href="{{asset('home/res/CoreValues.pdf')}}" target="_blank" >Core Values</a>
                                </li>
                                <li class="menu-items"><a class="" href="/policies">Policies</a></li>
                            </ul>
                        </li>
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="">Departments</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown">
                                <li class="menu-items"><a target="_blank"
                                        href="/Department/civil">Civil
                                        Engineering</a></li>
                                <li class="menu-items"><a target="_blank"
                                        href="/Department/cse">Computer Science and Engineering</a></li>
                                <li class="menu-items"><a target="_blank"
                                        href="/Department/ece">Electronics and Communication Engineering</a>
                                </li>
                                <li class="menu-items"><a target="_blank"
                                        href="/Department/it">Information Technology</a></li>
                                
                                <li class="menu-items"><a target="_blank"
                                        href="">Science and Humanities</a></li>
                            </ul>
                        </li>
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="">Administration</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown  ">
                                <li class="menu-items"><a class="" target="_blank" href="{{asset('administration/files/Organogram.pdf')}}">Organogram</a></li>
                                <li class="menu-items"><a class="" target="_blank"
                                        href="https://www.annauniv.edu/#vcmsg">Vice Chancellor</a></li>
                                <li class="menu-items"><a class="" target="_blank"
                                        href="https://www.annauniv.edu/administration.php">Registrar</a></li>
                                <li class="menu-items"><a class="" target="_blank"
                                        href="https://vidwan.inflibnet.ac.in/profile/117989">Dean</a></li>
                                <li class="menu-items"><a class="" href="/administration/hods">Heads of the Departments</a></li>
                                <li class="menu-items"><a class="" href="/directors">Centres Directors</a></li>
                                <li class="menu-items"><a class="" href="/administration/dean_office">Dean Office
                                        Staff</a></li>
                                <li class="menu-items"><a class=""
                                        href="{{asset('/administration/former_deans')}}">Former Directors/Deans</a></li>
                            </ul>
                        </li>
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="">Centres</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown  ">
                                <li class="menu-items">
                                    <button type="button" aria-haspopup="menu" aria-expanded="false">
                                        <a class="">University</a>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown dropdown-submenu ">
                                        <li class="menu-items"><a class="" href="https://cfr.annauniv.edu/">Centre for
                                                Research</a></li>
                                        <li class="menu-items"><a class="" href="https://cac.annauniv.edu/">Centre for
                                                Academic Courses</a></li>
                                        <li class="menu-items"><a class="" href="https://ctdt.annauniv.edu/">Centre for
                                                Sponsored Research and Consultancy</a></li>
                                        <li class="menu-items"><a class="" href="https://acoe.annauniv.edu/">Additional
                                                Controller for Examinations</a></li>
                                        <li class="menu-items"><a class="" href="https://cfd.annauniv.edu/">Centre for
                                                Faculty Development</a></li>
                                        <li class="menu-items"><a class="" href="https://www.annauniv.edu/">Others</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-items">
                                    <button type="button" aria-haspopup="menu" aria-expanded="false">
                                        <a class="">UCET Campus</a>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown dropdown-submenu ">
                                        <li class="menu-items"><a class="" href="/">AU-KBC
                                                Research Centre</a></li>
                                        <li class="menu-items"><a class="" href="/">Centre
                                                for Aerospace Research</a></li>
                                        <li class="menu-items"><a class="" href="/">Centre
                                                for Internet of Things</a></li>
                                        <li class="menu-items"><a class=""
                                                href="/">Siemens Centre
                                                of Excellence</a></li>
                                        <li class="menu-items"><a class=""
                                                href="/">Centre for
                                                Excellence in Automobile Technology</a></li>
                                        <li class="menu-items"><a class="" href="/">Centre for
                                                Robotics and Automation </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="">Facilities</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown  ">
                                <li class="menu-items"><a class=""
                                        href="http://www.placement.mitindia.edu/">Placements</a></li>
                                <li class="menu-items"><a class="" href="/telephone">Telephone</a></li>
                                <li class="menu-items"><a class=""
                                        href="http://www.health-centre.mitindia.edu/health_centre/">Health Centre</a>
                                </li>
                                <li class="menu-items"><a class=""
                                        href="https://library.annauniv.edu/mit_index.php">Library</a></li>
                                <li class="menu-items"><a class="" href="https://www.hostel.mitindia.edu/">Hostel</a>
                                </li>
                                <li class="menu-items"><a class="" href="https://mitindia.edu/en/sports-mit">Sports</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-items"><a class="" href="/scholarships">Scholarships</a></li>
                        <li class="menu-items"><a class="" href="/events">Events</a></li>
                        <li class="menu-items">
                            <button type="button" aria-haspopup="menu" aria-expanded="false">
                                <a class="">Alumni Affairs</a>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown">
                                <li class="menu-items"><a class=""
                                        href="https://alumni.annauniv.edu/project_campus.php">Centre for Alumni
                                        Relations and Corporate Affairs</a></li>
                                <li class="menu-items"><a class="" href="https://www.mitaa.org.in/">MIT Alumni
                                        Assocition</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="login-container"><button class="login-button" onclick="trigger()">Sign In</button></div>
            </div>
            <div class="header-bottom  slide-up" id="Slider">
                <div class="login-wrap">
                    <div>
                        <form action="src/apiservices/login.php" method="post">
                            <input type="text" class="text-input" name="email" placeholder="Enter your email"
                                value="" />
                            <input type="password" name="password" placeholder="Password" value="" />
                            <button type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;
                var menuItems = document.querySelectorAll('.menu-items');

                menuItems.forEach(function (menuItem) {
                    var button = menuItem.querySelector('button');
                    var dropdown = menuItem.querySelector('.dropdown');
                    var dropdownSubmenu = menuItem.querySelector('.dropdown dropdown-submenu');

                    if (isMobile) {
                        if (button && dropdown) {
                            button.addEventListener('click', function () {
                                var expanded = button.getAttribute('aria-expanded') === 'true' || false;
                                if (expanded) {
                                    dropdown.classList.remove('show');
                                    button.setAttribute('aria-expanded', 'false');
                                } else {
                                    dropdown.classList.add('show');
                                    button.setAttribute('aria-expanded', 'true');
                                }
                            });

                            menuItem.addEventListener('mouseleave', function () {
                                dropdown.classList.remove('show');
                                button.setAttribute('aria-expanded', 'false');
                            });
                        }
                        if (button && dropdown && dropdownSubmenu) {
                            button.addEventListener('click', function () {
                                var expanded = button.getAttribute('aria-expanded') === 'true' || false;
                                if (expanded) {
                                    dropdownSubmenu.classList.remove('show');
                                    button.setAttribute('aria-expanded', 'false');
                                } else {
                                    dropdownSubmenu.classList.add('show');
                                    button.setAttribute('aria-expanded', 'true');
                                }
                            });

                            menuItem.addEventListener('mouseleave', function () {
                                dropdown.classList.remove('show');
                                button.setAttribute('aria-expanded', 'false');
                            });
                        }
                    } else {
                        if (button && dropdown) {
                            button.addEventListener('mouseenter', function () {
                                dropdown.classList.add('show');
                                button.setAttribute('aria-expanded', 'true');
                            });

                            menuItem.addEventListener('mouseleave', function () {
                                dropdown.classList.remove('show');
                                button.setAttribute('aria-expanded', 'false');
                            });
                        }
                    }
                });

                var burgerMenu = document.querySelector('.burger-menu');
                var ulMenu = document.querySelector('.menus');

                burgerMenu.addEventListener('click', function () {
                    var children = burgerMenu.children;
                    children[0].classList.toggle('top');
                    children[1].classList.toggle('mid');
                    children[2].classList.toggle('bottom');
                    ulMenu.classList.toggle('open');
                });
            });

            trigger = function () {
                Slider.classList.toggle("slide-down")
            };

            function signOut() {
                // Send an AJAX request to the server
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "/src/apiservices/logout.php", true);
                xhr.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        window.location.href = "/";
                    }
                };
                xhr.send();
            }
        </script>
        <section class="page-container">

            <head>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            </head>
            <div>
                @yield('main')
            </div>
            <footer class="footer-container">
                <div class="footer-div">
                    <div class="footer-div-box footer-left">
                        <h3>Academics<br /></h3>
                        <p class="footer-links">
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://mitindia.edu/en/courses">Academic Courses</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://acoe.annauniv.edu/">ACOE</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://cac.annauniv.edu/">Academic Schedules</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://fb.annauniv.edu/fbreport/index.php">Feedback Portal</a>
                        </p>
                    </div>
                    <div class="footer-div-box footer-left">
                        <h3>Anna University<br /></h3>
                        <p class="footer-links">
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://www.annauniv.edu/pdf/Acts%20&%20Statues-New.pdf">Acts & Statues</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://iqac.annauniv.edu/">Mandatory Disclosure</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://gverify.annauniv.edu/">Genuineness Verification</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://www.annauniv.edu/nirf.php">NIRF</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://www.annauniv.edu/univdept.php">University Departments</a>
                        </p>
                    </div>
                    <div class="footer-div-box footer-left">
                        <h3>Downloads<br /></h3>
                        <p class="footer-links">
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="/src/assets/Downloads/SRF-KCC.pdf">Service Request Form (KCC)</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://www.annauniv.edu/rcc/pdf/form%20creating%20MS%20teams.pdf">MS Teams ID
                                Requisition Form</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="/src/assets/Downloads/KCC_Hall_Booking_Form.pdf">LAB/Hall Booking Form (KCC)</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="/src/assets/Downloads/KCC_WiFi_Registration_Form.pdf">WiFi Registration Form
                                (KCC)</a>
                        </p>
                    </div>
                    <div class="footer-div-box footer-left">
                        <h3>Facilities<br /></h3>
                        <p class="footer-links">
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://cc.mitindia.edu/">Dr.Kalam Computing Centre</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="http://10.11.80.135/onlinepayslip/">Payslip</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://www.annauniv.edu/POSH/index.php">POSH</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="https://docs.google.com/forms/d/e/1FAIpQLScrI2aIZGcv7FyhvQL-0bwJCliULY0dShhKLe7VEQXNT00Bpw/viewform">Student
                                Grievance Redressal</a>
                            <a class="footer-link" target="_blank" rel="noreferrer"
                                href="/src/assets/Downloads/TC_Circular_MIT.pdf">TC Procedure</a>
                        </p>
                    </div>
                    <div class="footer-div-box footer-left">
                        <h3>Contact Details<br /></h3>
                        <p class="footer-links">
                            <a class="footer-link" target="_blank" rel="noreferrer" href="">Anna University,
                                UCET Campus
                                Melpakkam, Tindivanam
                                604 307</a>
                            <a class="footer-link" target="_blank" rel="noreferrer" href="">Office: 044 2251 6002
                                Email:deanoffice.ucet@gmail.com</a>
                            <a class="footer-link" target="_blank" rel="noreferrer" href="">TNEA Enq:
                            04147-224477</a>
                        </p>
                    </div>
                    
                </div>

                <p class="footer-team-name">
                    Copyright © 2024 UCET | Developed by UCET Web Team | Maintained by IT Department 
                   
                </p>
            </footer>
        </section>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</html>