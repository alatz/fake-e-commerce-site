@extends('default')

@section('content')

<h1>{{$product->name}}</h1>

<div class="row">

  <div class="col-md-6">
    <div class="thumbnail">
        <img src="{{asset("img/$product->image")}}">
    </div>
  </div>

  <div class="col-md-6">

    <div class="thumbnail">
      <div class="caption">
        <p>{{$product->description}}</p>
        <h4><span class="price">${{$product->price}}</span></h4>
        {{Form::open(['url' => 'cart'])}}
        {{Form::label('qty', 'Qty')}}
        {{Form::text('qty', 1, ['maxlength'=> 2])}}<br>
        {{Form::hidden('id', $product->id)}}
        <button class="btn btn-primary btn-lg" type="submit" >Add to cart</button>
        {{Form::close()}}

      </div>
    </div>

  </div>

</div>


@stop

