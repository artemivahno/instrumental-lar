<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;

class categoryController extends Controller {

	public function categories() {

		/*обрабатывает главную страницу со всеми категориями   view - /*/
		return view('index', [
			'categories' => Category::all(),
		]);
	}
	//https://dev.to/jordanirabor/building-dynamic-breadcrumbs-in-laravel-926
	/*отображает страницу с брендами в выбранной категории   view - category/slag */
    public function show($slug) {

		$categorySlug = Category::whereSlug($slug)->firstOrFail();
		$categoryId = $categorySlug ['cat_id'];
        $brands = [];
        $items = Item::where('category_id', $categoryId)->get();//забрали items по id категории
        $brandIDs = array_pluck($items, 'brand_id'); //выдернули из items id брэндов
        foreach($brandIDs as $brandID) {
            $test = Brand::where('id', $brandID)->get()->toArray();
            array_push($brands, $test[0]);
        } //из БД забрали бренды по id и положили их в массив
        $brands = array_map("unserialize", array_unique(array_map("serialize", $brands))); //убрали дубли

        $catNsme = $categorySlug ['name'];; //для вывода имени категории в загаловке
	    //dd($catNsme );

		return view('category', [
			'categories' => Category::all(),
			'category' => $slug,
            'categoryName' => $catNsme,
			'brands' => $brands,
		]);
	}
}
