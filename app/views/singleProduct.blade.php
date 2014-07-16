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
        <a class="btn btn-primary btn-lg" role="button">Add to cart</a>

      </div>
    </div>

  </div>

</div>


@stop

