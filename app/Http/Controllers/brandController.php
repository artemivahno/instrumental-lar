<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 /*При клике на производителя вывод товаров этой фирмы*/
class brandController extends Controller
{
    public function index($cat_id, $brand_id){

	    /*$brands = [];

	    $items = Item::where('category_id', $cat_id)->get();
	    		$brandIDs = array_pluck($items, 'brand_id');
	    		foreach($brandIDs as $brandID) {
	    			$test = Brand::where('id', $brandID)->get();
	    			array_push($brands, $test[0]['name']);
	    		}*/

    	return view('brands');
    }
}
