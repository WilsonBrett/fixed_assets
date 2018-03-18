<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface assetsInterface {
	//create
	public function add_asset($req);

	//read
	public function get_assets();
	public function get_asset_by_assetname($u);
	public function get_asset_by_id($id);

	//update
	public function update_asset($req, $id);

	//delete
	public function delete_asset($id);
}
