@extends('default')

@section('content')

<table class="table">

<tr>
    <th></th>
    <th>name</th>
    <th>price</th>
    <th>quantity</th>
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
{{Form::open(['url' => 'checkout', 'method' => 'get'])}}
<button class="btn btn-primary btn-lg" type="submit" >Checkout</button>
{{Form::close()}}

@stop
