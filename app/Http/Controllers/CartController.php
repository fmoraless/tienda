<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('cart')) \Session::put('cart', array());
    }

    // Show Cart
    public function show()
    {
    	$cart = \Session::get('cart');
        return view('store.cart', compact('cart'));
    }

    // Add item
    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
    	$product->quantity = 1;
    	$cart[$product->slug] = $product;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }
    // Delete Item
    // Tras Cart
    // Total
}