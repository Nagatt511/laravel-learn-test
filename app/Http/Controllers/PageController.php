<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::orderBy('created_at','desc')->take(12)->get();
        dd($products);
        return view('welcome', compact($products));
    }
}
