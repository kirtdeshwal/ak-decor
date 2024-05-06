<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class FrontController extends Controller
{
    public function index()
    {
        return view('user.front.welcome');
    }

    public function contact()
    {
        return view('user.front.contact');
    }

    public function shop()
    {
        return view('user.front.shop');
    }

    public function product_details()
    {
        return view('user.front.product_details');
    }

    public function cart()
    {
        return view('user.front.cart');
    }
}
