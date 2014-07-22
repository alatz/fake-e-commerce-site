@extends('default')

@section('content')

<h2>Sign In</h2>

{{Form::open(['url' => 'users/signin'])}}

    <div class="row">

        <div class="form-group col-xs-6">

            {{Form::label('Email')}}

            {{Form::text('email', '',  ['class' => 'form-control', 'placeholder' => 'Email'])}}

        </div>

    </div>

    <div class="row">

        <div class="form-group col-xs-6">

            {{Form::label('Password')}}

            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}

        </div>

    </div>

    {{Form::submit('Sign In', ['class' => 'btn btn-primary'])}}

{{Form::close()}}

@stop

