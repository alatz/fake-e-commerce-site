@extends('default')

@section('content')

{{-- show validation errors if present --}}
@if($errors->has())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<h2>Sign Up</h2>

{{Form::open(['url' => 'users/signup'])}}

    <div class="row">
        <div class="form-group col-xs-6">
            {{Form::label('First Name')}}
            {{Form::text('firstname', '',  ['class' => 'form-control', 'placeholder' => 'First Name'])}}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-6">
            {{Form::label('Last Name')}}
            {{Form::text('lastname', '',  ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
        </div>
    </div>

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

    <div class="row">
        <div class="form-group col-xs-6">
            {{Form::label('Password Confirmation')}}
            {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
    </div>

    {{Form::submit('Sign Up', ['class' => 'btn btn-primary'])}}

{{Form::close()}}

@stop

