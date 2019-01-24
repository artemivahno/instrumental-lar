<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 /*При клике на производителя вывод товаров этой фирмы*/
/*отображает страницу с брендами в выбранной категории   view - category/cat_id/brand/bramd_id */
class brandController extends Controller
{
    public function index($categoryId, $brand_id){

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
}
