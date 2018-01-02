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

    <div class="heading">
        <h2 class="section-text">My work experience</h2>
    </div>

    <div id="Wawa Inc" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Developer at Wawa</h2>
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk fksldjfkfksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk.</p>
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
                </div>

                <div class="image-container">
                    <img class="img-responsive" src="../images/experience/id_tech.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="heading">
        <h2 class="section-text">My projects</h2>
    </div>

    <div id="Operating System" class="section">
        <div class="container">
            <div class="left-right">
                <div class="content">
                    <h2 class="name">Operating System</h2>
                    <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk fksldjfkfksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk fksldjfk.</p>
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
