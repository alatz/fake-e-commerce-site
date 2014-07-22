@extends('default')

@section('content')

<h2>Product Admin Page</h2>

<h3>Create Product</h3>

{{Form::open(array('route' => 'admin.products.store'))}}

    <p>
        {{Form::label('name')}}<br>
        {{Form::text('name')}}
    </p>

    <p>
        {{Form::label('description')}}<br>
        {{Form::textarea('description')}}
    </p>

    <p>
        {{Form::label('price')}}<br>
        {{Form::text('price', null)}}
    </p>

    <p>
        {{Form::label('image')}}<br>
        {{Form::text('image')}}
    </p>

    {{Form::submit('create')}}

{{Form::close()}}

<h3>Delete Product</h3>

@foreach($products as $product)

    {{Form::open(['method' => 'DELETE', 'route' => ['admin.products.destroy', $product->id]])}}

    {{Form::submit('Delete')}}

    {{Form::label($product->name)}}

    {{Form::close()}}

@endforeach

@stop

