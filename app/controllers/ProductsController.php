<?php

class ProductsController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
        $this->beforeFilter('admin');
    }

	public function index()
	{
		return View::make('product')->with('products', Product::all());
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
                ->with('class', 'alert alert-success')
                ->with('message', 'Product Created Successfully');

        }

        //return error
        return Redirect::route('admin.products.index')
            ->with('class', 'alert alert-danger')
            ->with('message', 'There was a problem')
            ->witherrors($validator)
            ->withInput();

    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if($product)
        {
            $product->delete();
            return Redirect::route('admin.products.index')
                ->with('class', 'alert alert-success')
                ->with('message', 'delete successful');
        }

        return Redirect::route('admin.products.index')
            ->with('class', 'alert alert-danger')
            ->with('message', 'somthing went wrong');

    }


}

