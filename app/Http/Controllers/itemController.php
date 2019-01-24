<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller {

    /*отображает страницу с товарми в выбранной категории и бренде  view - category/cat_id/brand/bramd_id/items */
	public function index($categoryId, $brand_id, $item_id){

        $brands = [];

        $items = Item::where('category_id', $categoryId)->get();

        $brandIDs = array_pluck($items, 'brand_id');
        foreach($brandIDs as $brandID) {
            $test = Brand::where('id', $brandID)->get();
            array_push($brands, $test[0]['name']);
        }
        return view('brands', [
            'brands' => $brands,
            'categoryId' => $categoryId,
        ]);
    }

	public function item() {

			return view('item');
		}
}
