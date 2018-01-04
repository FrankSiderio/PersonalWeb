@extends('layout')
    <title>Frank Siderio - Experience</title>

@section('css')
    <link href="{{ asset('css/experience.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="hero-section">

        <img style="" class="hero-image" src="../images/experience/it_council_photo.jpg"/>

        <div class="hero-text">
            <h1>What I Do.</h1>
        </div>

    </div>

    <div id="Work" class="heading padding">
        <h2 class="section-text">My work experience.</h2>
    </div>

    <!-- Work Experience -->
    <div id="Wawa Inc" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Developer at Wawa</h2>
                    <p>For the past two summers, I was on the mobile app team. During my first summer, I worked on mainly supporting the app. I created test scripts in Postman to test mobile ordering and worked a lot in MySql. My second summer, I worked with developers on features and bug fixes. I was part of creating a test app for geofence testing. I gained experience with Postman, MySql, AWS, Android Studio, APIs, Java, and Retrofit.</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="https://play.google.com/store/apps/details?id=com.wawa.android.appv2&hl=en">See Work</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/wawa_mobile.png"/>
                </div>
            </div>
        </div>
    </div>
    <div id="Marist SGA" class="dark-section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">CIO at Marist SGA</h2>
                    <p>As the liason between the student body and Marist IT, it is one of my duties to handle technology issues on campus. I lead a team who is responsible for improving and supporting the software applications for SGA and Student Activities. We support applications like our club management system, club websites, parking appeals, and our website. My team has developers, QA Testers, and Designers. We work with Linux, Apache, MySql, and PHP.</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="https://sga.marist.edu">See Work</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/sga.png"/>
                </div>
            </div>
        </div>
    </div>
    <div id="iD Tech" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Instructor at iD Tech</h2>
                    <p>As an instructor at iD Tech, I was able to teach kids about technology. I taught classes on how to program with JavaScript. As well as, a class in creating different skins and models in Minecraft. My favorite class was teaching Minecraft modding with Java.</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="https://www.idtech.com/">See Work</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/id_tech.png"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Experience -->

    <div id="Projects" class="heading padding">
        <h2 class="section-text">My projects.</h2>
    </div>

    <!-- Projects -->
    <div id="Operating System" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Operating System</h2>
                    <p>This project was created throughout my Fall 2016 semester in my Operating Systems class. We learned how OS's worked and we got to build one ourselves. My OS can run hex programs, write, read, and delete files, and can run multiple programs at once. I used TypeScript that compiles into JavaScript to create the OS.</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="http://foxweb.marist.edu/users/frank.siderio1/">See Project</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/os.png"/>
                </div>
            </div>
        </div>
    </div>
    <div id="Capping" class="dark-section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Capping</h2>
                    <p>My capping project was a semester long project that uses the LAMPP stack. The application is for life coaches who want to manage other coaches and clients. The application can store important information about a client as well as schedule meetings and set reminders. It also has the ability to be licensed to different life coach companies. The application was built using the Laravel framework.</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="https://letscoach.reev.us/">See Project</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/capping.png"/>
                </div>
            </div>
        </div>
    </div>
    <div id="MLB Scoreboard" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">MLB Scoreboard</h2>
                    <p>This project uses a Python script and the arduino kit to display MLB scores of the team the user enters in. I used an API to get the score and display it to the board. This was a fun project because I was able to integrate software and hardware. Also it was my first time using Python!</p>
                    <div class="button-container">
                        <a class="button btn-component" target="_blank" href="https://github.com/FrankSiderio/mlb-scoreboard">See Project</a>
                    </div>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/arduino.png"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects -->

@endsection

@section('js')
    <script src="{{asset('js/app.js')}}" ></script>
    <script>

    </script>
@endsection
