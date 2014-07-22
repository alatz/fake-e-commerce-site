@extends('default')

@section('content')

<h2>Shopping Cart</h2>

{{-- show alert if cart is empty --}}
@if(!$products)

<div class="alert alert-info" role="alert">Cart is empty</div>

{{-- show table if cart has products --}}
@else

<div class="table-responsive">

    <table class="table">

    <tr>
        <th class="col-sm-2">{{-- image --}}</th>
        <th class="col-sm-3">Name</th>
        <th class="col-sm-2">Price</th>
        <th class="col-sm-2">Quantity</th>
        <th class="col-sm-2">{{-- update button --}}</th>
        <th class="col-sm-2">{{-- remove item link --}}</th>
    </tr>

    @foreach($products as $product)

    <tr>
        <td><img height="125" width="175" src="{{asset('img/'.$product->image)}}"></td>
        <td>{{link_to("/product/$product->id", $product->name)}}</td>
        <td><span class="price">${{$product->price * $product->quantity}}</span></td>

        {{-- update quantity button --}}
        {{Form::open(['url' => 'cart/update'])}}
        {{Form::hidden('identifier', $product->identifier)}}
        <td>{{Form::text('qty', $product->quantity, ['maxlength'=> 2, 'class' => 'form-control input-sm'])}}</td>
        <td>{{Form::submit('Update', ['class' => 'pull-right btn btn-primary btn-sm'])}}</td>
        {{Form::close()}}

        <td><a href="cart/remove/{{$product->identifier}}">Remove Item(s)</a></td>
    </tr>

    @endforeach

    </table>

</div>

<h4 class="text-right">Total ({{Cart::TotalItems()}} items): <span class="price">${{Cart::total()}}</span></h4>

<a href="{{URL::to('/checkout')}}" class="pull-right btn btn-primary btn-lg" role="button">Checkout</a>

@endif

<a href="{{URL::to('/')}}" class="pull-left btn btn-primary btn-lg" role="button">Continue Shopping</a>

@stop

