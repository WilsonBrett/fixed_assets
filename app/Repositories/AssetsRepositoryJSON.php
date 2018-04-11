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
	public function get_assets() {
		$assets = DB::table('assets')
			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
			->select(
				'assets.id',
				'assets.name',
				'categories.category',
				'assets.amount',
				'assets.purchase_date',
				'assets.service_start_date',
				'assets.expiration_date',
				'assets.created_at',
				'assets.updated_at'
			)->get();

		return AssetResource::collection($assets);
	}

	public function get_asset_by_assetname($a) {
		return $result = $asset->isEmpty() ? false : $asset[0];
	}

	public function get_asset_by_id($id) {
		$asset = DB::table('assets')
			->leftJoin('categories', 'assets.category_id', '=', 'categories.id')
			->select(
				'assets.id',
				'assets.name',
				'categories.category',
				'assets.amount',
				'assets.purchase_date',
				'assets.service_start_date',
				'assets.expiration_date',
				'assets.created_at',
				'assets.updated_at'
			)
			->where('assets.id', $id)
			->get();

		return AssetResource::collection($asset);
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
