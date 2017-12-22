<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        @yield('css')
    </head>
    @include('partials.nav')
    @yield('content')

</html>

@yield('js')
