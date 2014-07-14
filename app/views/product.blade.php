@extends('default')

@section('content')

<h1>product admin page</h1>
<h2>create product</h2>

{{Form::open(array('url' => 'admin/products'))}}

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

<h2>modify product</h2>
<p>form goes here</p>
<h2>delete product</h2>
<p>form goes here</p>

<!--<div class="jumbotron">

<div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
    </div>
  </div>

  <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
      <div class="caption">
        <h4>Product Name</h4>
        <h4>Price</h4>
        <p>
        detial detial detial detial
        detial detial detial detial
        detial detial detial detial
</p>
      </div>
    </div>

    <div class="btn-group btn-group-justified">
         <a class="btn btn-primary btn-lg" role="button">add to cart</a>
    </div>
  </div>

</div>

</div>
-->


@stop
