<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller {

	public function index() {

		return view('products');
	}

	public function products_create(){

		return view('products_create');
	}
}
