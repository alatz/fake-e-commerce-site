<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    {{HTML::style('css/main.css')}}
</head>

<body>

@include('nav')

<div class="container">
    @yield('content')
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>

</html>

