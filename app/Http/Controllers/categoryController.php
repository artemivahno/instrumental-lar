<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class categoryController extends Controller {


	public function categories() {

/*обрабатывает главную страницу со всеми категориями   view - /*/
		return view('index', [
			'categories' => Category::all(),
		]);
	}

/*отображает страницу с брендами в выбранной категории   view - category/cat_id */
	public function category($categoryId) {

		$brands = [];
		$items = Item::where('category_id', $categoryId)->get();
		$brandIDs = array_pluck($items, 'brand_id');
		foreach($brandIDs as $brandID) {
			$test = Brand::where('id', $brandID)->get()->toArray();
			array_push($brands , $test[0]);
		}
        $brands = array_map("unserialize", array_unique(array_map("serialize", $brands)));
		return view('category', [
			'brands' => $brands,
            'categoryId' => $categoryId,
		]);
	}
}
