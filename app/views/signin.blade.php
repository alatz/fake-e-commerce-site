@extends('default')


@section('content')

<h2>Sign In</h2>

{{Form::open(['url' => 'users/signin'])}}

<p>
    {{Form::label('email')}}<br>
    {{Form::text('email')}}
</p>

<p>
    {{Form::label('password')}}<br>
    {{Form::password('password')}}
</p>

{{Form::submit('Sign In')}}

{{Form::close()}}

@stop
