<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller {

	public function index() {

		$items = [1, 2];


		return view('items',[
			'items'=> $items,
			]);
	}

	public function item() {

			return view('item');
		}
}
