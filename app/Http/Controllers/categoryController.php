<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class categoryController extends Controller {

	public function categories() {


		return view('index', [
			'categories' => Category::all(),
		]);
	}

	public function category($id) {

		$brands = [];
		$items = Item::where('category_id', $id)->get();
		$brandIDs = array_pluck($items, 'brand_id');
		foreach($brandIDs as $brandID) {
			$test = Brand::where('id', $brandID)->get();
			array_push($brands, $test[0]['name']);
		}
		return view('category', [
			'brands' => $brands,
		]);
	}
}
