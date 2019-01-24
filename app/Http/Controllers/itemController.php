<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;

class itemController extends Controller {

    /*отображает страницу с товарми в выбранной категории и бренде  view - category/cat_id/brand/bramd_id/items */
	public function index($categoryId, $brand_id, $item_id){

        $brands = [];

        $items = Item::where('category_id', $categoryId, 'brandId', $brand_id)->get();
		dd($items);

        $itemIDs = array_pluck($items, 'item_id');
        foreach($itemIDs as $itemID) {
            $test = Item::where('id', $itemID)->get();
            array_push($items, $test[0]['name']);
        }
        return view('brands', [
            'items' => $items,
        	'brands' => $brands,
            'categoryId' => $categoryId,
        ]);
    }

	/*public function item() {

			return view('brands');
		}*/
}
