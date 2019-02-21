<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model {

	use Sluggable;

	protected $table = 'categories';

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
