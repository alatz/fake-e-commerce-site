@extends('default')

@section('content')


<h2>Featured Item</h2>
<div class="jumbotron">

<div class="row">


  <div class="col-md-6">

    <div class="thumbnail">
      <div class="caption">
        <h4>Product Name</h4>
        <h4>Price</h4>
      </div>
    </div>
    <!--<div class="btn-group btn-group-justified">
         <a class="btn btn-primary" role="button">Add to Cart</a>
    </div>-->
         <a class="btn btn-primary btn-lg" role="button">Learn more</a>
  </div>


  <div class="col-md-6">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
    </div>
  </div>

</div>

</div>


<div class="row">

  <div class="col-md-4">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
      <div class="caption">
        <h4><a href="#">Product Name</a></h4>
        <h4>Price</h4>
      </div>

    <!--<div class="btn-group btn-group-justified">
         <a class="btn btn-primary" role="button">Add to Cart</a>
    </div>-->
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
      <div class="caption">
        <h4><a href="#">Product Name</a></h4>
        <h4>Price</h4>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
        <img src="http://placehold.it/350x250">
      <div class="caption">
        <h4><a href="#">Product Name</a></h4>
        <h4>Price</h4>
      </div>
    </div>
  </div>

</div>



@stop
