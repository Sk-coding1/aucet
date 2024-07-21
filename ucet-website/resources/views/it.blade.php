@extends('layouts.department')
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
                                    <h3>Avionics</h3>
                                </div>
                                <p>
                                    Avionics encompasses the electronic systems used in aircraft for communication, navigation, flight management, monitoring, and control. It plays a critical role in modern aviation, enabling safer, more efficient, and more capable flight operations. Avionics technology continues to advance rapidly, driven by developments in electronics, software, and connectivity. Modern avionics systems feature increased integration, automation, and connectivity, leading to improved safety, efficiency, and functionality in both commercial and military aircraft. Additionally, avionics play a crucial role in the emerging field of unmanned aerial vehicles (UAVs) and urban air mobility (UAM), enabling autonomous and remotely piloted flight operations. </p>
                                <a onclick="ReadMore('AEROSPACE~2~3')" class="read-more cpoint"><span>Read
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
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('department/img/profile.jpg')}}" class="testimonial-img">
                                    <h3>Propulsion</h3>
                                </div>
                                <p>
                                    Propulsion refers to the means by which a vehicle is propelled forward. In the context of aeronautics and aerospace, propulsion systems are essential for generating the thrust necessary to overcome drag and propel aircraft and spacecraft through the air or space. There are various types of propulsion systems used in aviation and space exploration, each with its own principles of operation and applications. Each propulsion system has its advantages and limitations, and the choice of propulsion depends on factors such as the intended application, vehicle design, performance requirements, and operating environment. Engineers continue to innovate and develop new propulsion technologies to improve efficiency, reduce environmental impact, and enable advanced capabilities in aviation and space exploration. </p>
                                <a onclick="ReadMore('AEROSPACE~2~8')" class="read-more cpoint"><span>Read
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
                                    <h5 class="mb-1 text-center">Dr. K.M. Parammasivam
                                    </h5>
                                    <p class="mb-1">PROFESSOR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <p class="fst-italic"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Professor K.M. Parammasivam, Head of the Aerospace Department, it is my pleasure to extend a warm greeting to all visitors to our website. Here, you will find a glimpse into the dynamic world of aerospace engineering and exploration that we are privileged to be a part of.
                            Our department is more than just a collection of classrooms and laboratories; it is a vibrant community of scholars, researchers, and innovators united by a shared passion for aerospace. Whether you are a prospective student, a curious enthusiast, or a seasoned professional, we invite you to explore all that our department has to offer.
                            At the Aerospace Department, we are dedicated to excellence in both education and research. Our faculty members are renowned experts in their fields, bringing a wealth of knowledge and experience to the classroom and beyond. Through their mentorship, our students are empowered to push the boundaries of what is possible and embark on journeys of discovery that will shape the future of aerospace technology.
                            Our research endeavors span a wide range of areas, from fundamental studies in aerodynamics and propulsion to the development of cutting-edge aerospace systems and technologies. Whether it's exploring the outer reaches of our atmosphere or designing the aircraft of tomorrow, our researchers are at the forefront of innovation, driving advancements that have the potential to revolutionize the way we travel and explore the cosmos. </p>
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
                                    <a href="https://www.auegov.ac.in/Department/aerospace/gallery" class="img-bg d-flex align-items-end" style="background-image:url('{{asset("department/img/profile.jpg")}}')">
                                        <div class="img-bg-inner">
                                            <h2> </h2>
                                            <!-- <p> </p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://www.auegov.ac.in/Department/aerospace/gallery" class="img-bg d-flex align-items-end" style="background-image: url('{{asset("department/img/profile.jpg")}}')">
                                        <div class="img-bg-inner">
                                            <h2>Department of Aerospace Engineering</h2>
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