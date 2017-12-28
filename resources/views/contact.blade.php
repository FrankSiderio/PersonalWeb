@extends('layout')

@section('css')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="top">
        <h1>Contact Me</h1>
        <h4>Send me anything you'd like! Just try to keep it clean.</h4>
    </div>

    <div id="status" class="status">
    </div>

    <div id="form">
    </div>

    <hr></hr>

    <script src="{{asset('js/app.js')}}" ></script>

@endsection
