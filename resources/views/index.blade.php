@extends('layout')

@section('css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="hero-section">

        <img src="../images/philly.jpg"/>

        <div class="hero-text">
            <h1 style="color:white">Hi, I'm Frank</h1>
            <h3 style="color:white">Pleased to meet you.</h3>
            <a href="#" id="scroll-down" class="scroll-down" address="true"></a>
            <p class="enter">Learn more about me</p>
        </div>

    </div>
@endsection
