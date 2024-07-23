@extends('layouts.facilities')
@section('facilities_content')
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
@endsection