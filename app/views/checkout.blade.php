@extends('default')

@section('content')

<h2>Checkout</h2>

<div class="alert alert-danger">
    <p><strong>Sorry!</strong> This store isn't real, therefore you can't order any of the products.</p>
</div>

{{Form::open(['url' => 'users/signup'])}}


<fieldset disabled>
<div class="row">
    <div class="form-group col-xs-4">
        {{Form::label('First Name')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{Form::label('Last Name')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-8">
        {{Form::label('Address Line 1')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-8">
        {{Form::label('Address Line 2')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{Form::label('City')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-2">
        {{Form::label('State')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{Form::label('Zip')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{Form::label('Phone')}}
        <input class="form-control" id="disabledInput" type="text" placeholder="Input disabled..." disabled>
    </div>
</div>

<button type="submit" class="btn btn-primary">Continue</button>
</fieldset>

{{Form::close()}}

@stop

