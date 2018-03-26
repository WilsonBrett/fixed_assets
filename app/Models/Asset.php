<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model {
	//I set timestamps to false because on update eloquent was using a different timezone then on create.
	public $timestamps = false;
	protected $fillable = ['name', 'category_id', 'amount', 'purchase_date', 'service_start_date', 'expiration_date'];

	//Automatically mutates dates to Carbon instances to use helper formatting functions.
	protected $dates = [
		'purchase_date',
		'service_start_date',
		'expiration_date',
		'created_at',
		'updated_at'
	];

	public function categories() {
		return $this->belongsTo('App\models\Category');
	}
}
