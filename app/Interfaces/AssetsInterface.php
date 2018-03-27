<?php

	namespace App\Interfaces;

	use Illuminate\Http\Request;

	interface AssetsInterface {
		//create
		public function add_asset($req);

		//read
		public function get_assets($sort, $order);
		public function get_asset_by_assetname($u);
		public function get_asset_by_id($id);

		//update
		public function update_asset($req, $id);

		//delete
		public function delete_asset($id);
	}
