<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = 'categories';
	//I set timestamps to false because on update eloquent was using a different timezone then on create.
	public $timestamps = false;

	public function assets() {
		return $this->hasMany('App\models\Asset');
	}
}
