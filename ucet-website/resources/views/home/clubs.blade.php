@extends('layouts.app')
@section('main')
<div class="categories-container noselect">
                <div class="description">
                    <h1>Clubs at UCET Campus</h1>
                </div>
                <div class="categories-cards-container">
                    <div class="categories-wrapper" id="category-wrapper">
                        <div class="category-card" onclick="window.open('https://www.hostel.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/hostel.png" />
                            <div class="content">
                                <h1>Hostel</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('https://mitindia.edu/en/nss', '_blank')">
                            <img src="src/assets/FacilitiesIcons/nss.png" />
                            <div class="content">
                                <h1>NSS</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('https://mitindia.edu/en/nso', '_blank')">
                            <img src="src/assets/FacilitiesIcons/nso.png" />
                            <div class="content">
                                <h1>NSO</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://yrc.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/yrc.png" />
                            <div class="content">
                                <h1>YRC</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('https://mitindia.edu/en/athenaeum', '_blank')">
                            <img src="src/assets/FacilitiesIcons/athaneum.png" />
                            <div class="content">
                                <h1>Athenaeum</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('https://pda.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/pda.png" />
                            <div class="content">
                                <h1>PDA</h1>
                            </div>
                        </div>
                        <div class="category-card"
                            onclick="window.open('http://www.tamilmandram.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/tamil_mandram.png" />
                            <div class="content">
                                <h1>Tamil Mandram</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://www.rotaract.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/rotaract_club.png" />
                            <div class="content">
                                <h1>Rotaract Club</h1>
                            </div>
                        </div>
                        <div class="category-card"
                            onclick="window.open('http://www.csmit.mitindia.edu/#/home', '_blank')">
                            <img src="src/assets/FacilitiesIcons/csmit.png" />
                            <div class="content">
                                <h1>Computer Society</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://www.tbo.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/tbo.png" />
                            <div class="content">
                                <h1>TBO</h1>
                            </div>
                        </div>
                        <div class="category-card"
                            onclick="window.open('http://www.themitquill.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/mit_quill.png" />
                            <div class="content">
                                <h1>MIT Quill</h1>
                            </div>
                        </div>
                        <div class="category-card"
                            onclick="window.open('http://www.varietyteam.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/variety_team.png" />
                            <div class="content">
                                <h1>Variety Team</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://www.museum.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/museum.png" />
                            <div class="content">
                                <h1>Museum</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://www.mitra.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/mitra.png" />
                            <div class="content">
                                <h1>MITRA</h1>
                            </div>
                        </div>
                        <div class="category-card" onclick="window.open('http://www.tedc.mitindia.edu/', '_blank')">
                            <img src="src/assets/FacilitiesIcons/tedc.png" />
                            <div class="content">
                                <h1>TEDC</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection