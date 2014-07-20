@extends('default')

@section('content')

<h2>Shopping Cart</h2>


@if(!$products)
<div class="alert alert-info" role="alert">Cart is empty</div>
@else
<table class="table">

<tr>
    <th></th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th></th>
</tr>

@foreach($products as $product)

<tr>
    <td><img height="125" width="175" src="{{asset('img/'.$product->image)}}"></td>
    <td>{{link_to("/product/$product->id", $product->name)}}</td>
    <td><span class="price">${{$product->price * $product->quantity}}</span></td>
    <td>{{$product->quantity}}</td>
    <td><a href="cart/remove/{{$product->identifier}}">Remove Item(s)</a></td>
</tr>

@endforeach

</table>

<h4 class="text-right"><a href="#">Update</a></h4>
<h4 class="text-right">Total ({{Cart::TotalItems()}} items): <span class="price">${{Cart::total()}}</span></h4>

<a href="{{URL::to('/checkout')}}" class="pull-right btn btn-primary btn-lg" role="button">Checkout</a>

@endif

<a href="{{URL::to('/')}}" class="pull-left btn btn-primary btn-lg" role="button">Continue Shopping</a>

@stop
