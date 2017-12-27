@extends('layout')

@section('css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="hero-section">

        <img src="../images/philly.jpg"/>

        <div class="hero-text">
            <h1>Hi, I'm Frank.</h1>
            <h3>Pleased to meet you.</h3>
            <a href="#" id="scroll-down" class="scroll-down" address="true"></a>
            <p class="enter">Learn more about me.</p>
        </div>

    </div>

    <div class="heading">
        <h2 class="section-text">A little bit about what I do.</h2>
    </div>

    <div class="rule-of-thirds container">
        <div class="one-third">
            <img class="image" src="../images/wawa_app.png"/>

            <div class="one-third-body">
                <h4>Wawa Inc.</h4>
                <p class="description">I worked on the mobile app team. Being an Android developer I worked with many different tools.</p>
                <a class="navy-btn btn-component" href="/">Learn More</a>
            </div>
        </div>
        <div class="one-third">
            <img class="image" src="../images/marist_seal.png"/>

            <div class="one-third-body">
                <h4>Marist SGA.</h4>
                <p class="description">At Student Government I serve as the liason between the student body and the administration.</p>
                <a class="navy-btn btn-component" href="/">Learn More</a>
            </div>
        </div>
        <div class="one-third">
            <img class="image" src="../images/id_tech.jpg"/>

            <div class="one-third-body">
                <h4>iD Tech.</h4>
                <p class="description">I taught many different classes including minecraft moding and learning how to program with JavaScript.</p>
                <a class="navy-btn btn-component" href="/">Learn More</a>
            </div>
        </div>
    </div>

@endsection
