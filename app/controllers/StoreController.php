<?php

class StoreController extends BaseController {

	public function index()
	{
		return View::make('home');
	}

	public function singleProduct($id)
	{
        return View::make('singleProduct')->with('product', Product::find($id));
	}

}

