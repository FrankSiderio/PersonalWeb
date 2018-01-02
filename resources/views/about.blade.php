@extends('layout')

@section('css')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet" type="text/css">
@endsection('css')

@section('content')
    <div class="hero-section">

        <img class="hero-image" src="../images/interests/sand_castle.png"/>

        <div class="hero-text">
            <h1>Who I Am.</h1>
            <h3 class="flavor-text">I grew up going to the Jersey shore every summer but thats only one of my many interests. Scroll to see more.</h3>
        </div>

    </div>

    <div class="heading">
        <h2 class="section-text">Some of my interests</h2>
    </div>

    <div id="interests" class="container section">
    </div>
@endsection

@section('js')
    <script src="{{asset('js/app.js')}}" ></script>
@endsection
