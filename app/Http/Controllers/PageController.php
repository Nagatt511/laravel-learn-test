<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::productBy('create_at','desc')->take(12)->get();

        return view('welcome', compact($products));
    }
}
