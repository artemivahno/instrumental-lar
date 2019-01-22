<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller {

	public function index() {
		return view('items');
	}

	public function item() {

			return view('item');
		}
}
