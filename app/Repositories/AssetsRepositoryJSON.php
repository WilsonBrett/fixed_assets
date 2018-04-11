<?php

namespace App\Repositories;

use App\Interfaces\AssetsInterface;
use App\Models\Asset;
use App\Http\Requests\StoreAsset;
use App\Http\Requests\UpdateAsset;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\AssetResource;

class AssetsRepositoryJSON implements AssetsInterface {

	//create
	public function add_asset(StoreAsset $req) {
		$asset = new Asset;
		$asset->name = $req->name;
		$asset->category_id = $req->category;
		$asset->amount = $req->amount;
		$asset->purchase_date = $req->purchase_date;
		$asset->service_start_date = $req->service_start_date;
		$asset->expiration_date = $req->expiration_date;
		$asset->save();
	}

	//read
	public function get_assets($sort, $order) {
		$order2 = $sort == 'name' ? $order : 'asc';
		$assets = DB::table('assets')
			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
			->select('assets.id', 'assets.name', 'categories.category', 'assets.amount', 'assets.purchase_date')
			->orderBy($sort, $order)
			->orderBy('name', $order2)
			->paginate(10);

		return $assets;
	}

	public function get_asset_by_assetname($a) {
		return $result = $asset->isEmpty() ? false : $asset[0];
	}

	public function get_asset_by_id($id) {
		$x = new AssetResource(Asset::find($id));
		return $x;
//		$asset = DB::table('assets')
//			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
//			->select('assets.id', 'assets.name', 'categories.category', 'categories.useful_life', 'assets.amount', 'assets.purchase_date', 'assets.service_start_date', 'assets.expiration_date')
//			->where('assets.id', $id)
//			->get();
//
//		return $asset_vals = $asset->all()[0];
	}

	//update
	public function update_asset(UpdateAsset $req, $id) {
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
}
