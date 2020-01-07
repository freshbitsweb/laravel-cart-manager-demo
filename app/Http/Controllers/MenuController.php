<?php

namespace App\Http\Controllers;

use App\Product;

class MenuController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $cart = $this->getCartDetails();
        return view('home', compact('products', 'cart'));
    }
}
