<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function products (){

        return view('products');
    }

    public function product_create () {


        return view('product_create', [
	        'categories' => Category::all(),
	        'brands' => Brand::all(),

        ]);
    }

    public function store (){
    	return request() ->all();
    }
}
