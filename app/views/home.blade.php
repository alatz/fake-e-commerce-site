@extends('default')

@section('jumbotron')

@include('jumbotron')

@stop

@section('content')

<div class="row">

    @foreach($products as $product)

    <div class="col-md-4">

        <div class="thumbnail">

            <img src="{{asset("img/$product->image")}}">

            <div class="caption">

                <h4><a href="{{URL::to('product/'.$product->id)}}">{{$product->name}}</a></h4>

                <h4><span class="price">${{$product->price}}</span></h4>

            </div>

        </div>

    </div>

    @endforeach

</div>

@stop

