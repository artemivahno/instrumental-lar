<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class itemController extends Controller {

	public function index($categoryId) {

		$items = [];
		$items = Item::where('category_id', $categoryId)->get();


		return view('items',[
			'items'=> $items,
			]);
	}

	public function item() {

			return view('item');
		}
}
