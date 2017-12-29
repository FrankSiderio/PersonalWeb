@extends('layout')

@section('css')
    <link href="{{ asset('css/interests.css') }}" rel="stylesheet" type="text/css">
@endsection('css')

@section('content')
    <div class="hero-section">

        <img class="hero-image" src="../images/philly.jpg"/>

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
