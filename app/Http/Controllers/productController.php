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

	/*public function index($slug, $brandSlug) {

			$categorySlug = Category::whereSlug($slug)->firstOrFail();
			$categoryId = $categorySlug ['id'];
			//dd($categorySlug);

			$brandSlug = Brand::whereSlug($brandSlug)->firstOrFail();
			$brandId = $brandSlug ['id'];

			//$items = Item::where('category_id', $categoryId)->where('brand_id', $brandId)->get();
			$products = Product::where('category_id', $categoryId)->where('brand_id', $brandId)->get();

			$catNsme = $categorySlug ['name']; //для вывода имени категории в загаловке
			$brandName = $brandSlug ['name'];
			//dd($products);

			return view('items', [
				'categories' => Category::all(),
				'category' => $categorySlug,
				'products' => $products,
				'categoryName' => $catNsme,
				'brandName' => $brandName,
			]);
		}*/
}
