<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sluggable;

class Brand extends Model {

	protected $table = 'brands';

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
