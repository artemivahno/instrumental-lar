<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function products (){

        return view('products');
    }

    public function product_create () {


        return view('product_create');
    }
}
