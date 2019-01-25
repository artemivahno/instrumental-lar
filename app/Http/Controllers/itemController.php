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


		//dd($brandId);

/*		//		$itemsInCategory = ['item' => Item::all(),];
		//$items = Item::where('category_id', $categoryId, 'brand_id', $brandId)->get();
		//dd($items);
		$itemsInCategory = Item::where('category_id', $categoryId)->get();
		//$items = Item::where('brand_id', $brandId)->get();
		$itemsBrand = array_pluck($itemsInCategory, 'brand_id');
		foreach($itemsBrand as $brandID) {
					$test = Brand::where('id', $brandID)->get()->toArray();
					array_push($brands, $test[0]);
				}
				dd($brands);
		/*$item = [];
		if($itemsBrand === $brandId) {
			$test = Brand::where('id', $brandId)->get()->toArray();
			array_push($item, $test[0]);
		}

		*/
		return view('items', [
			'items' => $items,
            'brands' => $brands,
            'categoryId' => $categoryId,

		]);
	}

	public function item() {

		return view('item');
	}
}
