<?php

class StoreController extends BaseController {

	public function index()
	{
        return View::make('home')
            ->with('products', Product::all()->take(9))
            ->with('featuredProduct', Product::find(12)) ;
	}

	public function singleProduct($id)
	{
        return View::make('singleProduct')->with('product', Product::find($id));
	}

}

