<?php

class ProductsController extends BaseController {

	public function index()
	{
		return View::make('product');
	}

	public function store()
	{
        $validator = Validator::make(Input::all(), Product::$rules);

        if($validator->passes())
        {
            $product = new Product;
            $product->name = Input::get('name');
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            $product->image = Input::get('image');
            $product->save();

            //add message about successful creation
            return Redirect::route('admin.products.index')
                ->with('message', 'Product Created Successfully');

        }

        //return error
        return Redirect::route('admin.products.index')
            ->with('message', 'There was a problem')
            ->witherrors($validator)
            ->withInput();

    }

}

