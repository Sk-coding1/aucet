@extends('layouts.app')
@section('title','University College of Engineering Tindivanam')

@section('main')
<div>
    <div class="banner noselect">
        <div class="left">
            <div class="logo-container">
                <img src="{{asset('home/img/anna_logo_grey.png')}}" />
                <h1 class="fs-1">
                    <p>University College of Engineering Tindivanam</p>

                </h1>
            </div>

            <div class="description">
                <p>University College of Engineering Tindivanam (A Constituent College of Anna University , Chennai )
                    has been established by the Government of Tamil nadu in the year 2008 with four departments namely
                    Civil Engineering, Computer science and engineering, Electronics and Communication Engineering,
                    Information Technology. With the Goverment of Tamilnadu initiative Civil Engineering(Tamil Medium)
                    course is started at 2010. UCE Tindivanam has an intake of 270 students.
                    This university campus, is a place for budding engineers to widen their technical knowledge through
                    which they could enhance their innovative ideas by effectively accessing all available technical
                    resources found inside the campus.
                    This campus provides a great support to technical education by bringing in a number of well
                    experienced experts from various disciplines as staff members. Most of the staff members here, being
                    doctoral holders in their relative fields, are packed with information so that the student’s thirst
                    for research is easily quenched.</p>
            </div>
            <div class="rank" id="accredit">
                <p class="rank-tag">Accreditation</p>
                <p class="campus-container" id="accredit">NBA & NAAC</p>
                <p class="rank-tag">NIRF 2023</p>
                <p class="campus-container">14th Rank</p>
                <p class="rank-tag">QS 2025</p>
                <p class="campus-container">383rd Rank</p>
            </div>
        </div>
        <div class="right">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('home/img/viksit.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('home/img/ucet_csb1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <script>
        window.onload = function () {
            var accreditationElements = document.querySelectorAll('#accredit');
            accreditationElements.forEach(function (element) {
                element.addEventListener('click', function () {
                    window.open('/src/components/Accreditation/Accreditation1.php', '_blank');
                });
            });
        };
    </script>
    <div class="sticky-icon">
        <a href="https://www.youtube.com/@ucetsocialmedia" target="_blank" class="Youtube"><i
                class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/anna_university.chennai/" target="_blank" class="Instagram"><i
                class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/auchennaiofficial" target="_blank" class="Facebook"><i
                class="fab fa-facebook-f"> </i></a>
        <a href="https://twitter.com/auvcochennai" target="_blank" class="Twitter"><i class="fab fa-twitter"> </i></a>
        <a href="https://www.linkedin.com/company/annauniversity-chennai" target="_blank" class="LinkedIn"><i
                class="fab fa-linkedin"> </i></a>
        <a href="/telephone" target="_blank" class="Telephone"><i class="fa fa-phone"> </i></a>
    </div>
    <div class="announcement">
        <div class="head "><span class="announce-head"><a href="/announcements"
                    class="text-decoration-none text-dark">Announcements</a></span>
        </div>
        <div class="data">
            <marquee width="100%" direction="left" height="30px" scrolldelay="100" behavior="scroll">
            </marquee>
        </div>
        <div class="tail"><span class="announce-head"><a href="/announcements"
                    class="text-decoration-none text-dark">View more</a></span></div>
        <div class="tail-more"><span class="drop-arrow"></span></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'src/apiservices/fetch_announcements.php',
                type: 'GET',
                success: function (data) {
                    var announcements = JSON.parse(data);
                    var marquee = $('marquee');
                    announcements.forEach(function (announcement, index) {
                        var li = $('<li>');
                        if (new Date() - new Date(announcement.announcementDate) <= 7 * 24 * 60 * 60 * 1000) {
                            var span = $('<span>').text('(New)');
                            li.append(span);
                        }
                        var a = $('<a>').attr('href', announcement.viewmore).attr('target', '_blank').addClass('a-link').text(announcement.announcementTitle);
                        li.append(a);
                        marquee.append(li);
                        if (index < announcements.length - 1) {
                            marquee.append('<span class="seperator"> | </span>');
                        }
                    });
                }
            });
        });
    </script>
    <div class="numbers-count-container noselect">
        <span key="0" class="number-count">
            <h2>2.8K</h2>
            <p>Under Graduates</p>
        </span>
        <span key="1" class="number-count">
            <h2>216</h2>
            <p>Post Graduates</p>
        </span>
        <span key="2" class="number-count">
            <h2>306</h2>
            <p>PhD Scholars</p>
        </span>
        <span key="3" class="number-count">
            <h2>11</h2>
            <p>UG Programs</p>
        </span>
        <span key="4" class="number-count">
            <h2>14</h2>
            <p>PG Programs</p>
        </span>
        <span key="5" class="number-count">
            <h2>210/124</h2>
            <p>Faculty/Staff</p>
        </span>
    </div>
    <div class="deanMain">
        <div class="deanMask"
            style="display: flex; flex-direction: row; height: 100%; width: 100%; background-color: rgba(255, 207, 89, 0.60); justify-content: space-between; --darkreader-inline-bgcolor: rgba(199, 156, 99, 0.85);">
            <div class="deanContent">
                <div class="deanTitle">
                    <span>Digital Pedagogical Approach in Teaching Learning Process </span>
                    <span>Research and Innovations with Social Responsibilities</span>
                </div>
                <div class="deanQuote">
                    <span>
                        <blockquote class="deanQuoteContent">
                            Engineering is not just a degree, but a way of thinking. Even though the number of Engineers
                            in India has proliferated over recent years, the demand for good engineers has remained
                            constant. The first step of being a successful engineer is to have a systematic and
                            efficient learning. It is very important for a student to understand the fundamentals and
                            basic principles of engineering. There is no more important mission for an engineering
                            college than the preparation of its graduates for their careers. At University College of
                            Engineering, Tindivanam, we’re taking on that challenge by broadening the education of our
                            students. We master the technical aspects of engineering at the curriculum’s core and likely
                            add new dimensions that will better prepare the students for the world of today and tomorrow
                        </blockquote>
                    </span>
                    <span></span>
                    <span></span>
                    <span class="fw-bold">Dr. P. Thamizhazhagan, Dean</span>
                </div>
                <div class="flex-row">
                    <button class="more-button" onclick="openProfile()">Know More</button>
                </div>
            </div>
            <div class="deanImage">
                <img src='{{asset('home/img/dean.jpg')}}' />
            </div>
        </div>
    </div>

    <script>
        function openProfile() {
            var websiteURL = 'https://vidwan.inflibnet.ac.in/profile/117989';
            window.open(websiteURL, '_blank');
        }
    </script>

    <div class="numbers-count-container noselect">
        <span key="0" class="number-count">
            <h2>06</h2>
            <p>Research Centres</p>
        </span>
        <span key="1" class="number-count">
            <h2>61Cr+</h2>
            <p>R & D Grants</p>
        </span>
        <span key="2" class="number-count">
            <h2>3615+</h2>
            <p>Publications</p>
        </span>
        <span key="3" class="number-count">
            <h2>18/8</h2>
            <p>Patents Published/Granted</p>
        </span>
        <span key="4" class="number-count">
            <h2>95.6K+</h2>
            <p>Books RF ID - Automation</p>
        </span>
        <span key="5" class="number-count">
            <h2>32</h2>
            <p>Student Clubs</p>
        </span>
    </div>
    <div class="mi-vi-wrapper">
        <div class="vi-wrapper">
            <div class="vision-main-card">
                <div class="vheading">Vision</div>
                <div class="body">
                    <div>
                        The vision of Anna University is to be a
                        We at UCET will impart futuristic technical education and instil high patterns of discipline
                        through our dedicated staff, who shall set global standards, making our students technologically
                        superior and ethically strong, who in turn shall improve the quality of life of the human race.
                    </div>
                </div>
            </div>
        </div>
        <div class="mi-wrapper">

            <div class="mission-main-card">
                <div class="vheading">Mission</div>
                <div class="body">
                    <div>
                        Our mission is to educate students from all over India, including those from the local and rural
                        areas, so they become enlightened individuals, improving the living standards of their families,
                        industry and society. We will provide individual attention, world-class quality education and
                        take care of character building.
                    </div>
                </div>

                <div class="login-container open">
                    <!-- Button functionality is not available in this PHP script -->
                </div>
            </div>
        </div>
    </div>

    <div class="dept-container">
        <div class="title">Departments</div>
        <div class="dept-wrapper">
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/aerospace', '_blank')">
                <div class="svg-container" style="background-color: #9848FF">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Civil Engineering</div>
                    <div class="description">Established - 2008</div>
                </div>
            </div>
            <div class="dept-card noselect" onclick="window.open('https://www.auegov.ac.in/Department/auto', '_blank')">
                <div class="svg-container" style="background-color: red">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Computer Science and Engineering</div>
                    <div class="description">Established - 2008</div>
                </div>
            </div>
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/elect', '_blank')">
                <div class="svg-container" style="background-color: #F94C10">
                    <i class="fas fa-microchip"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Electronics and Communication <br> Engineering</div>
                    <div class="description">Established - 2008</div>
                </div>
            </div>
            <div class="dept-card noselect"
                onclick="window.open('https://www.auegov.ac.in/Department/instru', '_blank')">
                <div class="svg-container" style="background-color: #F31559">
                    <i class="fas fa-code"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Information Technology</div>
                    <div class="description">Established - 2008</div>
                </div>
            </div>
            <div class="dept-card noselect" onclick="window.open('https://www.auegov.ac.in/Department/prod', '_blank')">
                <div class="svg-container" style="background-color: #F8DE22">
                    <i class="fas fa-atom"></i>
                </div>
                <div class="details">
                    <div class="dept-name">Science and Humanities</div>
                    <div class="description">Established - 2008</div>
                </div>
            </div>



        </div>
    </div>
    <div class="staggered-cards-container noselect">
        <div class="description">
            <h1>Centres</h1>
        </div>
        <div class="staggered-cards-wrapper">

            <div class="card" onclick="window.open('https://library.annauniv.edu/mit_index.php', '_blank')">
                <img src="{{asset('home/img/library.jpg')}}" />
                <div class="content">
                    <h1>Library</h1>
                </div>
            </div>
            <div class="card" onclick="window.open('http://www.placement.mitindia.edu/', '_blank')">
                <img src="{{asset('home/img/placement.jpg')}}" />
                <div class="content">
                    <h1>Placement</h1>
                </div>
            </div>
            <div class="card" onclick="window.open('https://mitindia.edu/en/sports-mit', '_blank')">
                <img src="{{asset('home/img/sports.jpg')}}" />
                <div class="content">
                    <h1>Sports</h1>
                </div>
            </div>
            <div class="card" onclick="window.open('http://www.health-centre.mitindia.edu/health_centre/', '_blank')">
                <img src="{{asset('home/img/health.jpg')}}" />
                <div class="content">
                    <h1>Health Centre</h1>
                </div>
            </div>
        </div>
    </div>

    <a href="/clubs" target="_blank" class="text-decoration-none text-dark">
        <div class="categories-container noselect">
            <div class="description">
                <h1>Clubs</h1>
            </div>
            <div class="categories-cards-container">
                <div class="categories-wrapper" id="category-wrapper">
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/hostel.png" />
                        <div class="content">
                            <h1>Hostel</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/nss.png" />
                        <div class="content">
                            <h1>NSS</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/nso.png" />
                        <div class="content">
                            <h1>NSO</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/yrc.png" />
                        <div class="content">
                            <h1>YRC</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/athaneum.png" />
                        <div class="content">
                            <h1>Athenaeum</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/pda.png" />
                        <div class="content">
                            <h1>PDA</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tamil_mandram.png" />
                        <div class="content">
                            <h1>Tamil Mandram</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/rotaract_club.png" />
                        <div class="content">
                            <h1>Rotaract Club</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/csmit.png" />
                        <div class="content">
                            <h1>Computer Society</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tbo.png" />
                        <div class="content">
                            <h1>TBO</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/mit_quill.png" />
                        <div class="content">
                            <h1>MIT Quill</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/variety_team.png" />
                        <div class="content">
                            <h1>Variety Team</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/museum.png" />
                        <div class="content">
                            <h1>Museum</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/mitra.png" />
                        <div class="content">
                            <h1>MITRA</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tedc.png" />
                        <div class="content">
                            <h1>TEDC</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/hostel.png" />
                        <div class="content">
                            <h1>Hostel</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/nss.png" />
                        <div class="content">
                            <h1>NSS</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/nso.png" />
                        <div class="content">
                            <h1>NSO</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/yrc.png" />
                        <div class="content">
                            <h1>YRC</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/athaneum.png" />
                        <div class="content">
                            <h1>Athenaeum</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/pda.png" />
                        <div class="content">
                            <h1>PDA</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tamil_mandram.png" />
                        <div class="content">
                            <h1>Tamil Mandram</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/rotaract_club.png" />
                        <div class="content">
                            <h1>Rotaract Club</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/csmit.png" />
                        <div class="content">
                            <h1>Computer Society</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tbo.png" />
                        <div class="content">
                            <h1>TBO</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/mit_quill.png" />
                        <div class="content">
                            <h1>MIT Quill</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/variety_team.png" />
                        <div class="content">
                            <h1>Variety Team</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/museum.png" />
                        <div class="content">
                            <h1>Museum</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/mitra.png" />
                        <div class="content">
                            <h1>MITRA</h1>
                        </div>
                    </div>
                    <div class="category-card">
                        <img src="src/assets/FacilitiesIcons/tedc.png" />
                        <div class="content">
                            <h1>TEDC</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
@endsection