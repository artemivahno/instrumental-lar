<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use Cviebrock\EloquentSluggable\Sluggable;

class CategoryController extends Controller {

	public function categories() {

		/*обрабатывает главную страницу со всеми категориями   view - /
		уже прописал
		*/
		return view('index', [
			'categories' => Category::all(),
		]);
	}

	public function categoriesAll() {

		return view('Admin.categories', [
			'categories' => Category::all(),
		]);
	}

	public function category_create() {

    	return view('admin.category_create');
	}

	public function store(CreateCategoryRequest $request) {

		$category = Category::create([
			'name' => $request->get("name"),
		]);
		/*$category = new Category([
			'name' => request("name"),
		]);
		$category ->save();*/

		return redirect('/categories');
	}

	public function edit(){

	}

	//https://dev.to/jordanirabor/building-dynamic-breadcrumbs-in-laravel-926
	/*отображает страницу с брендами в выбранной категории   view - category/slag */
    public function show($slug) {

		$categorySlug = Category::whereSlug($slug)->firstOrFail();
		$categoryId = $categorySlug ['id'];
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
