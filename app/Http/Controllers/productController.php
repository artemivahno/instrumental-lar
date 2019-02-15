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
			$allCat = Category::all();


        return view('product_create', [
	        'categories' => $allCat,
	        'brands' => Brand::all(),

        ]);
    }
}
