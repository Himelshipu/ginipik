<?php

namespace App\Http\Traits;
use App\Models\Product;

trait ProductTrait {

    public function index() {
        $product = Product::all();
        return view('product')->with(compact('product'));
    }

}
