<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'item';

	protected $fillable = ['id', 'name'];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable() {
		return [
			'slug' => [
				'source' => 'name'
			]
		];
	}
}
