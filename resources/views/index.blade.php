@extends('layout')

@section('css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="hero-section">

        <img class="hero-image" src="../images/philly.jpg"/>

        <div id="person">
        </div>

    </div>

    <div id="work-experience">
    </div>

    <div id="projects">
    </div>

    <div class="contact">
        <a class="navy-btn btn-component" href="/contact">Contact Me</a>
    </div>

    <hr></hr>

    <script src="{{asset('js/app.js')}}" ></script>

@endsection
