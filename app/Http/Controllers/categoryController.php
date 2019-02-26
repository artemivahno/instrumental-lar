<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    /*обрабатывает главную страницу со всеми категориями   view - /*/
	    		return view('index', [
	    			'categories' => Category::all(),
	    		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

	public function showSlug($slug) {

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

			return view('category.slug', [
				'categories' => Category::all(),
				'category' => $slug,
	            'categoryName' => $catNsme,
				'brands' => $brands,
			]);
		}

	public function categoriesAll() {

			return view('Admin.categories', [
				'categories' => Category::all(),
				dd(categories),
			]);
		}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
