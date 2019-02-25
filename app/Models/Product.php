<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

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

	public function brand (){
		return $this->belongsTo(Brand::class, 'brand_id');
	}
	public function category (){
		return $this->belongsTo(Category::class, 'category_id');
	}
}
