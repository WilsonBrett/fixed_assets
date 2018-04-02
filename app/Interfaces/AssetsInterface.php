<?php

	namespace App\Interfaces;

	use App\Http\Requests\StoreAsset;
	use App\Http\Requests\UpdateAsset;

	interface AssetsInterface {
		//create
		public function add_asset(StoreAsset $req);

		//read
		public function get_assets($sort, $order);
		public function get_asset_by_assetname($u);
		public function get_asset_by_id($id);

		//update
		public function update_asset(UpdateAsset $req, $id);

		//delete
		public function delete_asset($id);
	}
