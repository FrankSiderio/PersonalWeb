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

    <div id="Wawa Inc" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Developer at Wawa</h2>
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk fksldjfkfksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="https://play.google.com/store/apps/details?id=com.wawa.android.appv2&hl=en">See Work</a>
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
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="https://sga.marist.edu">See Work</a>
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
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="https://www.idtech.com/">See Work</a>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/id_tech.png"/>
                </div>
            </div>
        </div>
    </div>

    <div id="Projects" class="heading padding">
        <h2 class="section-text">My projects.</h2>
    </div>

    <div id="Operating System" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Operating System</h2>
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk fksldjfkfksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="http://foxweb.marist.edu/users/frank.siderio1/">See Project</a>
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
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="https://letscoach.reev.us/">See Project</a>
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
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
                    <br><a class="button btn-component" target="_blank" href="https://github.com/FrankSiderio/mlb-scoreboard">See Project</a>
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/arduino.png"/>
                </div>
            </div>
        </div>
    </div>

    <hr></hr>
@endsection

@section('js')
    <script src="{{asset('js/app.js')}}" ></script>
@endsection
