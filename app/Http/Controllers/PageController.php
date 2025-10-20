<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cartPage()
    {
        return view('page.cart');
    }
    public function checkoutPage()
    {
        return view('page.checkout');
    }
    public function dangkyPage()
    {
        return view('page.dangki');
    }
    public function index()
    {
        return view('page.home');
    }
    public function shopPage()
    {
        return view('page.shop');
    }
    public function singlePage()
    {
        return view('page.single');
    }
}
