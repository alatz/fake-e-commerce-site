@extends('default')

@section('content')

<h1>{{$product->name}}</h1>

<div class="row">

  <div class="col-md-6">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
    </div>
  </div>

  <div class="col-md-6">

    <div class="thumbnail">
      <div class="caption">
        <h4>Details</h4>
        <p>{{$product->description}}</p>
        <h4>Price</h4>
        <h4>{{$product->price}}</h4>
        <a class="btn btn-primary btn-lg" role="button">Add to cart</a>

      </div>
    </div>

  </div>

</div>


@stop

