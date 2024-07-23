@extends('layouts.department')
@section('title', 'Electronics and Communication Engineering')
@section('dept')


        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div id="header-carousel" class="container carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md vis-mis-carousel">
                                <img class="d-block img-fluid" data-aos="zoom-out" data-aos-delay="200" src="{{asset('department/img/it1.jpg')}}">
                            </div>
                            <div class="col-md m-3 vis-mis-carousel bg-op-dark">
                                <h6 class="display-1 m-3 fs-1 text-white fw-normal" data-aos="fade-up">Vision</h6>
                                <p class="text-white" data-aos="fade-up" data-aos-delay="400">The Department of Aerospace Engineering shall strive to be a globally known department, committed to its academic excellence, professionalism and societal expectations. The department aims to impart state of the art technical knowledge, practical skills, leadership qualities, team spirit, ethical values and entrepreneurial skills to make all the students capable of taking up any task relevant to the area of Aerospace Engineering.</p>
                                <div class="text-end m-2">
                                    <a onclick="ReadMore('AEROSPACE~1~1')" class="read-more cpoint" data-aos="fade-up" data-aos-delay="600"><span>Read More</span>
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md m-3 vis-mis-carousel bg-op-dark">
                                <h6 class="display-1 m-3 fs-1 text-white fw-normal">Mission</h6>
                                <p class="text-white">1) To prepare the students to have a sound/very good fundamental knowledge to meet the present and future needs of industries. 2) To improve the technical knowledge of the students in tune with the current requirements through collaboration with industries and research organization.
                                    3) To make the students gain enough knowledge in various aspects of system integration.
                                    4) To motivate the students to take up jobs in national laboratories and aerospace industries of our country.
                                    5) To stimulate interest to pursue inter and multidisciplinary research, sponsored and consultancy projects with industries and research
                                    establishments.
                                    6) To encourage the faculty members and students to do research and update themselves with the latest developments in the area of Aerospace
                                    Engineering.
                                    7) To encourage students to initiate startup companies in Aerospace domain.</p>
                                <div class="text-end m-1">
                                    <a onclick="ReadMore('AEROSPACE~1~2')" class="read-more cpoint"><span>Read
                                            More</span>
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md vis-mis-carousel">
                                <img class="d-block img-fluid vis-mis-img" src="{{asset('department/img/it2.jpg')}}" alt="Mission" style="min-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container aos-init" data-aos="fade-up">
                <div class="section-title">
                    <h3>Thrust Areas</h3>
                </div>
                <div class="testimonials-slider swiper aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('department/img/profile.jpg')}}" class="testimonial-img">
                                    <h3>Aerodynamics</h3>
                                </div>
                                <p>
                                    Aerodynamics is the study of how air moves around objects, particularly aircraft, and how this movement affects those objects. It is a fundamental aspect of aeronautical engineering and plays a critical role in the design, performance, and safety of aircraft. Aerodynamics plays a vital role in all aspects of aviation, from the design and manufacturing of aircraft to flight testing and operations. Advances in aerodynamic research and computational modeling continue to drive innovation in aerospace engineering, leading to more efficient, maneuverable, and safer aircraft designs. </p>
                                <a onclick="ReadMore('AEROSPACE~2~2')" class="read-more cpoint"><span>Read
                                        More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('department/img/profile.jpg')}}" class="testimonial-img">
                                    <h3>Composites</h3>
                                </div>
                                <p>
                                    Advancements in composite materials, manufacturing processes, and design techniques continue to drive innovation in aeronautics and aerospace industries, leading to the development of lighter, stronger, and more efficient aircraft and spacecraft. However, challenges such as cost, manufacturing complexity, and certification requirements remain areas of ongoing research and development. </p>
                                <a onclick="ReadMore('AEROSPACE~2~4')" class="read-more cpoint"><span>Read
                                        More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('department/img/profile.jpg')}}" class="testimonial-img">
                                    <h3>Combustion</h3>
                                </div>
                                <p>
                                    In both aeronautics and aerospace, optimizing combustion processes is crucial for enhancing engine efficiency, reducing fuel consumption, and improving overall performance. Engineers continually research and develop combustion technologies to make engines more powerful, reliable, and environmentally friendly, while also exploring alternative fuels and propulsion methods to meet the demands of aviation and space exploration. </p>
                                <a onclick="ReadMore('AEROSPACE~2~7')" class="read-more cpoint"><span>Read
                                        More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container aos-init" data-aos="fade-up">
                <div class="section-title">
                    <h3>By the Numbers</h3>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="0.2s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="0.4s">
                                        <h2>217</h2>
                                        <p>UG Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="0.4s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="0.6s">
                                        <h2>92</h2>
                                        <p>PG Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="0.6s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="0.8s">
                                        <h2>46</h2>
                                        <p>Scholars</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="0.8s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="1s">
                                        <h2>17</h2>
                                        <p>Faculty</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="1s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="1.2s">
                                        <h2>7</h2>
                                        <p>Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="1.2s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="1.4s">
                                        <h2>22</h2>
                                        <p>Patents</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="1.4s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="1.6s">
                                        <h2>86</h2>
                                        <p>Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="1.6s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="1.8s">
                                        <h2>246</h2>
                                        <p>Publications</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="1.8s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="2s">
                                        <h2>4024</h2>
                                        <p>Citations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-4">
                        <div class="card_counts">
                            <div class="card__table wow bounceInUp" data-wow-delay="2s">
                                <div class="card_tablecell">
                                    <div class="card_userdetails wow swing center" data-wow-delay="2.2s">
                                        <h2>21</h2>
                                        <p>H-Index</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->
        <!-- ======= HOD Section ======= -->
        <section id="hod" class="hod section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>Message from the HOD</h3>
                </div>
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <div class="card card-span text-white h-100">
                            <img class="img-fluid" src="{{asset('department/img/profile.jpg')}}">
                            <div class="card-body px-xl-5 px-md-3 pt-0">
                                <div class="d-flex flex-column align-items-center hod-name-bg" style="margin-top:-2.2rem;">
                                    <h5 class="mb-1 text-center">Mr.S.Milton Ganeshan
                                    </h5>
                                    <p class="mb-1">PROFESSOR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <p class="fst-italic" style="text-indent: 60px;">Our department has a total of 180 students, six staff members, one technical assistant and two lab assistants. Two staff members are Doctorate holders and three are pursuing their doctoral degrees. Our department laboratory has 60 computers in intranet usage, a high-speed Internet Connection and necessary UPS facility to provide a conducive technical learning environment. Events such as guest lectures and symposiums are conducted every year to help students to keep abreast of the latest advancements in the field of Information and Communication technologies. Our staff members assist the students with the quality engineering education and encouraging them to actively participate in the events in and out of our institution. Our primary goal is to understand the students and bring out their hidden talents to nurture them with the relevant technical knowledge to pursue their ambitious goals for the benefit of the student and the humankind. </p>
                    </div>
                </div>
            </div>
        </section><!-- End HOD Section -->
        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>Events</h3>
                </div>
                <div class="event-marquee">
                    <div class="event-container">
                        <a href="https://www.auegov.ac.in/Department/aerospace/announcements" class="event-box">
                            <div class="date2">
                                <h6>Mar<span>16</span></h6>
                                <span>To</span>
                                <h6>Mar<span>17</span></h6>
                            </div>
                            <div class="info">
                                <h4>FLIGHT'24</h4>
                                <p>Symposium and Alumni Meet conducted by Aerospace Engineering Department</p>
                            </div>
                        </a>
                        <a href="https://www.auegov.ac.in/Department/aerospace/announcements" class="event-box">
                            <div class="date">
                                <h6>Apr<span>04</span></h6>
                            </div>
                            <div class="info">
                                <h4>Indian Landing in Space</h4>
                                <p>40th Anniversary of the First Spaceflight Indian Cosmonaut Rakesh Sharma</p>
                            </div>
                        </a>
                        <a href="https://www.auegov.ac.in/Department/aerospace/announcements" class="event-box">
                            <div class="date2">
                                <h6>May<span>03</span></h6>
                                <span>To</span>
                                <h6>May<span>04</span></h6>
                            </div>
                            <div class="info">
                                <h4>Technical Seminar</h4>
                                <p>EMERGING TECHNOLOGIES IN AEROSPACE DEVELOPMENTS</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Events Section -->
        <section id="img-slider" class="img-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="section-title">
                    <h3>Photos</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="https://www.auegov.ac.in/Department/aerospace/gallery" class="img-bg d-flex align-items-end" style="background-image:url('{{asset("department/img/profile.jpg")}}')">
                                        <div class="img-bg-inner">
                                            <h2>Books Published</h2>
                                            <!-- <p> </p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://www.auegov.ac.in/Department/aerospace/gallery" class="img-bg d-flex align-items-end" style="background-image:url('{{asset("department/img/profile.jpg")}}')">
                                        <div class="img-bg-inner">
                                            <h2> Sea Hawk IN 252</h2>
                                            <!-- <p> Served in Indian Navy.</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://www.auegov.ac.in/Department/aerospace/gallery" class="img-bg d-flex align-items-end" style="background-image: url('{{asset("department/img/profile.jpg")}}')">
                                        <div class="img-bg-inner">
                                            <h2>Department of Information Technology</h2>
                                            <!-- <p> </p> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End img Slider Section -->
        

@endsection

@section('nav-active')
    <script>
            $(document).ready(function() { 
                $(".home").addClass("active");
                $('.carousel').carousel({ pause: false }); 
            });
    </script>
@endsection