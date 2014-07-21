<?php

class StoreController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

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

    public function addToCart()
    {
        $item = Product::find(Input::get('id'));
        $qty = Input::get('qty');

        Cart::insert([
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => $qty,
            'image' => $item->image
        ]);

        return Redirect::to('cart')
            ->with('class', 'alert alert-success')
            ->with('message', " $qty Item(s) added to cart");
    }

    public function showCart()
    {
        return View::make('cart')->with('products', Cart::contents());
    }

    public function removeFromCart($identifier)
    {
        $item = Cart::Item($identifier);
        $item->remove();

        return Redirect::to('cart')
            ->with('class', 'alert alert-success')
            ->with('message', "$item->quantity Item(s) removed");
    }

    public function updateCart()
    {
        $item = Cart::Item(Input::get('identifier'));

        $item->quantity = Input::get('qty');

        return Redirect::to('cart');
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return View::make('checkout');
        }

        //send guest to sign in page if not logged in
        return Redirect::guest('users/signin')
            ->with('class', 'alert alert-warning')
            ->with('message', 'Please sign in');
    }

}

