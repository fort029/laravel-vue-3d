<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function category()
    {
        Cart::add(3, 'T-shrt',5 , 10.00, ['img'=>'/assets/images/products/product-1.jpg','size' => 'XL', 'color' => 'red']);
        return view('shop.category');
    }

    public function product($id)
    {
        return view('shop.product');
    }

    public function basket()
    {
        return view('shop.basket');
    }
    public function checkout(){
        $shipping = Cart::total()< 100?8.2562:0;
        $shipping_tax = $shipping * Cart::taxRate()/100;
        return view('shop.checkout', ['shipping_subtotal'=>round($shipping,2),'shipping_tax'=>round($shipping_tax,2),'shipping_total'=>round($shipping+$shipping_tax,2)]);
    }
}
