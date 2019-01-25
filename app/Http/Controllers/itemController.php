<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class itemController {

	public function index($categoryId, $brandId) {

		$brands = [];
				$items = Item::where('category_id', $categoryId)-> where('brand_id', $brandId)->get();

				$brandIDs = array_pluck($items, 'brand_id');
				foreach($brandIDs as $brandID) {
					$test = Brand::where('id', $brandID)->get()->toArray();
					array_push($brands, $test[0]);
				}
				$itemsId = $items;

		return view('items', [
			'items' => $items,
			'itemsId' => $itemsId,
            'brandsId' => $brandId,
            'categoryId' => $categoryId,

		]);
	}

	public function item($itemsId) {
		dd($itemsId);
		$items = Item::where('itemId',$itemsId)->first();
		//dd($items);

		return view('item', [
			'item'=>$items,
		]);
	}
}
