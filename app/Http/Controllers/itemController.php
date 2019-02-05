<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class itemController /*extends Controller*/
{

	public function index($slug, $brandSlug) {

		$categorySlug = Category::whereSlug($slug)->firstOrFail();
		$categoryId = $categorySlug ['cat_id'];

		$brandSlug = Brand::whereSlug($brandSlug)->firstOrFail();
		$brandId = $brandSlug ['id'];

		$brands = [];
		$items = Item::where('category_id', $categoryId)->where('brand_id', $brandId)->get();

		$catNsme = $categorySlug ['name']; //для вывода имени категории в загаловке
		$brandName = $brandSlug ['name'];

		return view('items', [
			'category' => $categorySlug,
			'items' => $items,
			'categoryName' => $catNsme,
			'brandName' => $brandName,
		]);
	}

	public function item($itemSlug) {

		$item = Item::where('slug', $itemSlug)->first();

		$categoryId = $item ['category_id'];
		$brandId = $item ['brand_id'];
		$category = Category::whereCat_id($brandId)->firstOrFail();//Дима, в чем отличие этих запросов
		$brand = Brand::whereId($brandId)->firstOrFail();

		//dd($category);
		$brandName = $brand ['name'];
		//dd($brandName );
		$catName = $category ['name']; //для вывода имени категории в загаловке
		$categorySlug = $category ['slug'];
		$brandSlug = $brand ['slug'];

		return view('item', [
			'item' => $item,
			'slug' => $categorySlug,
			'brandsSlug' => $brandSlug,
			'categoryName' => $catName,
			'brandName' => $brandName,
		]);
	}
}
