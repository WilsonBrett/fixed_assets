<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model {
	//I set timestamps to false because on update eloquent was using a different timezone then on create.
	public $timestamps = false;

	// @TODO update this when know more about fields in the assets table
	protected $fillable = ['Name', 'Category', 'Amount', 'PurchaseDate', 'ServiceStartDate', 'ExpirationDate'];
}
