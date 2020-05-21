<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        return view('product');
    }

    public function calculator(Request $request)
    {
        $product = $request->product;
        $price = $request->price;
        $discount = $request->discount;
        $discountAmount = $price * $discount * 0.01;
        $discountPrice = $price - $discountAmount;
        return view('result', compact('product','price', 'discountAmount', 'discount', 'discountPrice'));
    }
}
