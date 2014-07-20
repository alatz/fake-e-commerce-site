<div class="jumbotron">

<h3>Featured Item</h3>

<div class="row">

<div class="col-md-6">
    <div class="thumbnail">
        <img src="{{asset("img/$featuredProduct->image")}}">
    </div>
</div>

<div class="col-md-6">

<div class="thumbnail">
    <div class="caption">
    <h4><a href="product/{{$featuredProduct->id}}">{{$featuredProduct->name}}</a></h4>
    <h4><span class="price">${{$featuredProduct->price}}</span></h4>
<div class="btn-group btn-group-justified">
     <a href="product/{{$featuredProduct->id}}" class="btn btn-primary btn-lg" role="button">Learn More</a>
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


