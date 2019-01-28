<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class itemController {

	public function index($categoryId, $brandId) {

		$brands = [];
		$items = Item::where('category_id', $categoryId)->where('brand_id', $brandId)->get();

		$brandIDs = array_pluck($items, 'brand_id');
		foreach($brandIDs as $brandID) {
			$test = Brand::where('id', $brandID)->get()->toArray();
			array_push($brands, $test[0]);
		}

		return view('items', [
			'items' => $items,
			'brandsId' => $brandId,
			'categoryId' => $categoryId,

		]);
	}

	public function item($categoryId, $brandId, $itemId) {

		$item = Item::where('id', $itemId)->get();
		dd($item);
		return view('item', [
			'item' => $item,
			//'itemId' => $itemId,
			'brandsId' => $brandId,
			'categoryId' => $categoryId,
		]);
	}
}
