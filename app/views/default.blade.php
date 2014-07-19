<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    {{HTML::style('css/main.css')}}
</head>

<body>

@include('nav')

@yield('jumbotron')

<div class="container">
    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif

    @yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>

</html>

