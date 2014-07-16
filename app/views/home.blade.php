@extends('default')

@section('content')

<h2>Featured Item</h2>
<div class="jumbotron">

<div class="row">

  <div class="col-md-6">
    <div class="thumbnail">
        <img src="{{asset("img/$featuredProduct->image")}}">
    </div>
  </div>

  <div class="col-md-6">

    <div class="thumbnail">
      <div class="caption">
        <h3>{{$featuredProduct->name}}</h3>
        <h4><span>{{$featuredProduct->price}}</span></h4>
    <div class="btn-group btn-group-justified">
         <a class="btn btn-primary btn-lg" role="button">Learn More</a>
    </div>
        <!--<a class="btn btn-primary btn-lg" role="button">Learn More</a>-->

      </div>
    </div>

    <!--<div class="btn-group btn-group-justified">
         <a class="btn btn-primary" role="button">Add to Cart</a>
    </div>-->
  </div>



</div>

</div>




<div class="row">
@foreach($products as $product)


  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset("img/$product->image")}}">
      <div class="caption">
        <h4><a href="{{URL::to('product/'.$product->id)}}">{{$product->name}}</a></h4>
        <h4>${{$product->price}}</h4>
      </div>
    </div>
  </div>

@endforeach
</div>

@stop
