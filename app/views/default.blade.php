<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Example eCommerce Website</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    {{HTML::style('css/main.css')}}
</head>

<body>

@include('nav')

<div class="container bot-margin">

    @yield('jumbotron')

    {{-- show message if it's present --}}
    @if(Session::has('message'))
        {{-- add class to message if it's present --}}
        @if(Session::has('class'))
            <p class="{{Session::get('class')}}">{{Session::get('message')}}</p>
        {{-- show message without a class --}}
        @else
            <p>{{Session::get('message')}}</p>
        @endif
    @endif

    @yield('content')

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>

</html>

