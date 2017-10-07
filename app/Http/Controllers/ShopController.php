<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index()
    {
        return Product::all();
    }


    public function show($slug)
    {
        return Product::where('slug', $slug)->firstOrFail();
    }
}
