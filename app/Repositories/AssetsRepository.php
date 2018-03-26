<?php

namespace App\Repositories;

use App\Http\Requests\StoreAsset;
use App\Interfaces\AssetsInterface;
use App\Models\Asset;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;

class AssetsRepository implements AssetsInterface {

	//create
	public function add_asset($req) {
		$asset = new Asset;
		$asset->name = $req->name;
		$asset->category_id = $req->category_id;
		$asset->amount = $req->amount;
		$asset->purchase_date = $req->purchase_date;
		$asset->service_start_date = $req->service_start_date;
		$asset->expiration_date = $req->expiration_date;
		$asset->save();
	}

	//read
	public function get_assets() {
		$assets = DB::table('assets')
			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
			->select('assets.id', 'assets.name', 'categories.category', 'assets.amount', 'assets.purchase_date')
			->get();

		//format the dates
		$this->__date_formatter($assets, ['purchase_date']);
		return $assets;
	}

	public function get_asset_by_assetname($a) {
		return $result = $asset->isEmpty() ? false : $asset[0];
	}

	public function get_asset_by_id($id) {
		$asset = DB::table('assets')
			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
			->select('assets.id', 'assets.name', 'categories.category', 'categories.useful_life', 'assets.amount', 'assets.purchase_date', 'assets.service_start_date', 'assets.expiration_date')
			->where('assets.id', $id)
			->get();

		$this->__date_formatter($asset, ['purchase_date', 'service_start_date', 'expiration_date']);
		return $asset_vals = $asset->all()[0];
	}

	//update
	public function update_asset($req, $id) {
		$existing_asset = Asset::find($id);
		$existing_asset->name = $req->name;
		$existing_asset->category_id = $req->category;
		$existing_asset->amount = $req->amount;
		$existing_asset->purchase_date = $req->purchase_date;
		$existing_asset->service_start_date = $req->service_start_date;
		$existing_asset->expiration_date = $req->expiration_date;
		$existing_asset->save();
	}

	//delete
	public function delete_asset($id) {
		Asset::where('id', '=', $id)->delete();
	}

	//formats dates with 'each' method off Illuminate\Support\Collection and a carbon instance
	public function __date_formatter(&$collection, $date_fields_array) {
		foreach($collection->all() as $item) {
			foreach($date_fields_array as $field) {
				$item->$field = Carbon::createFromFormat('!Y-m-d', $item->$field, 'America/New_York');
			}
		}
	}
}
