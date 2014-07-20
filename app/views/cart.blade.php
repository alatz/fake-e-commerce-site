@extends('default')

@section('content')

<h2>Shopping Cart</h2>

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
    <td>{{$product->name}}</td>
    <td>${{$product->price * $product->quantity}}</td>
    <td>{{$product->quantity}}</td>
    <td><a href="cart/remove/{{$product->identifier}}">Remove Item(s)</a></td>
</tr>

@endforeach

</table>

<h4>Total ({{Cart::TotalItems()}} items): <span class="price">${{Cart::total()}}</span></h4>

<a href="{{URL::to('/checkout')}}" class="btn btn-primary btn-lg" role="button">Checkout</a>

<br>
<br>

<a href="{{URL::to('/')}}" class="btn btn-primary btn-lg" role="button">Continue Shopping</a>

@stop
