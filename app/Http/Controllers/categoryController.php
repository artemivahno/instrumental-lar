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
	//https://dev.to/jordanirabor/building-dynamic-breadcrumbs-in-laravel-926
	/*отображает страницу с брендами в выбранной категории   view - category/slag */
    public function show($slug) {

		$categorySlug = Category::whereSlug($slug)->firstOrFail();
		$categoryId = $categorySlug ['cat_id'];
        $brands = [];
        $items = Item::where('category_id', $categoryId)->get();
        $brandIDs = array_pluck($items, 'brand_id'); //выдернули из items id брэндов
        foreach($brandIDs as $brandID) {
            $test = Brand::where('id', $brandID)->get()->toArray();
            array_push($brands, $test[0]);
        } //из БД забрали бренды по id и положили их в массив
        $brands = array_map("unserialize", array_unique(array_map("serialize", $brands))); //убрали дубли

        $catNsme = Category::where('cat_id', $categoryId)->first(); //для вывода имени категории в загаловке

        //	$items = Item::where('category_id', $slug)->get(); //забрали items по id категории
        //dd($items);
        /*$categoriesAll = Category::all();
        dd($categoriesAll);*/

		// Get category for slug.
		return view('category', [
			'category' => $categorySlug,
            'categoryName' => $catNsme,
			'brands' => $brands,
		]);
	}

    /*  ---  НЕ ИСПОЛЬЗУЕТСЯ    public function category($categoryId) {

        $brands = [];
        $items = Item::where('category_id', $categoryId)->get(); //забрали items по id категории

        $catNsme = Category::where('cat_id', $categoryId)->first(); //для вывода имени категории в загаловке

        $brandIDs = array_pluck($items, 'brand_id'); //выдернули из items id брэндов
        foreach($brandIDs as $brandID) {
            $test = Brand::where('id', $brandID)->get()->toArray();
            array_push($brands, $test[0]);
        } //из БД забрали бренды по id и положили их в массив
        $brands = array_map("unserialize", array_unique(array_map("serialize", $brands))); //убрали дубли

        return view('category', [
            'categoryName' => $catNsme,
            'brands' => $brands,
            'categoryId' => $categoryId,
        ]);
    } ---  НЕ ИСПОЛЬЗУЕТСЯ*/
}
