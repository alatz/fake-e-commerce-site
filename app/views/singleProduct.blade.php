@extends('default')

@section('content')

<h2>{{$product->name}}</h2>

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
        <div class="row">
            <div class="col-xs-2">
                {{Form::label('qty', 'Qty')}}
                {{Form::text('qty', 1, ['maxlength'=> 2, 'class' => 'form-control bot-margin'])}}
            </div>
        </div>
        {{Form::hidden('id', $product->id)}}
        <button class="btn btn-primary btn-lg " type="submit" >Add to cart</button>
        {{Form::close()}}

      </div>
    </div>

  </div>

</div>


@stop

