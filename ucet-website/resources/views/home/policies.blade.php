@extends('layouts.app')
@section('title','Anna University Policies')
@section('main')
<div>
<div class="dept-container">
    <div class="title">Anna University Policies</div>
    <div class="dept-wrapper">
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/green_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #9848FF">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Green Campus Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/envirnoment_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #FE7BE5">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Environment and Energy Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/e-governance.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #F94C10">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">e-Governance Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/it_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #38E54D">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Information Technology Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/gender_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #F8DE22">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Gender and Social Non-discrimination <br> Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/social_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #F31559">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Gender Empowerment and Social Equity <br> Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Scholorship.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #FE7BE5">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Scholarships / Freeships Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Conduct.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #0096FF">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Code of Conduct Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Incentive_policy.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #38E54D">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Faculty Incentive Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Resource.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #0D1282">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Resource Mobilization and Funding Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Grievance.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #0D1282">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Grievance Redressal Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
        <div class="dept-card noselect" onclick="window.open('{{asset('home/res/Research.pdf')}}', '_blank')">
            <div class="svg-container" style="background-color: #F94C10">
                <i class="fas fa-passport"></i>            </div>
            <div class="details">
                <div class="dept-name">Research Promotion Policy</div>
                <div class="description">Anna University</div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection