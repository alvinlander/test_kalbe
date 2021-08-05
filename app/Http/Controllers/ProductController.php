<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $dataProduct = Product::all();
        return view('home')->with([
            'data' => $dataProduct
        ]);
    }

    public function show($id)
    {
        $dataProduct = Product::findOrFail($id);
        return view('checkout')->with([
            'data' => $dataProduct
        ]);
    }
}
