<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class itemController extends Controller {

	public function indexx($categoryId, $brandId) {

		$items = [];
		$items = Item::where('category_id', $categoryId, 'brand_id', $brandId)->get();


		return view('items',[
			'items'=> $items,
			]);
	}

	public function item() {

			return view('item');
		}
}
