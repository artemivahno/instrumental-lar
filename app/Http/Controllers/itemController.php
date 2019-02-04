<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class itemController /*extends Controller*/{

	public function index($slug, $brandSlug) {

		$categorySlug = Category::whereSlug($slug)->firstOrFail();
		$categoryId = $categorySlug ['cat_id'];

		$brandSlug = Brand::whereSlug($brandSlug)->firstOrFail();
		$brandId = $brandSlug ['id'];

		$brands = [];
		$items = Item::where('category_id', $categoryId)->where('brand_id', $brandId)->get();

		/*$brandIDs = array_pluck($items, 'brand_id');
		foreach($brandIDs as $brandID) {
			$test = Brand::where('id', $brandID)->get()->toArray();
			array_push($brands, $test[0]);
		}*/
		$catNsme = $categorySlug ['name']; //для вывода имени категории в загаловке
		$brandName = $brandSlug ['name'];

		return view('items', [
			'items' => $items,
			'categoryName' => $catNsme,
			'brandName' => $brandName,
		]);
	}

	public function item($itemSlug) {

		$item = Item::where('slug', $itemSlug)->first();
		//dd($item);
		return view('item', [
			'item' => $item,
		]);
	}
}
