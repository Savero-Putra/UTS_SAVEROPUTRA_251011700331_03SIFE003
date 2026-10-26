<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    public function index()
    {
        $products = Ecommerce::all();

        return view('ecommerce.index', compact('products'));
    }

    public function show($id)
    {
        $product = Ecommerce::findOrFail($id);

        return view('ecommerce.show', compact('product'));
    }
}
