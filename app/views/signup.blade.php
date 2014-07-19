@extends('default')

@section('content')

@if($errors->has())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

<h2>Signup</h2>

{{Form::open(['url' => 'users/signup'])}}

<p>
    {{Form::label('firstname')}}<br>
    {{Form::text('firstname')}}
</p>

<p>
    {{Form::label('lastname')}}<br>
    {{Form::text('lastname')}}
</p>

<p>
    {{Form::label('email')}}<br>
    {{Form::text('email')}}
</p>

<p>
    {{Form::label('password')}}<br>
    {{Form::password('password')}}
</p>

<p>
    {{Form::label('confirm password')}}<br>
    {{Form::password('password_confirmation')}}
</p>

{{Form::submit('Sign Up')}}

{{Form::close()}}

@stop

