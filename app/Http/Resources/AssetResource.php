<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'category' => $this->category,
			'amount' => $this->amount,
			'purchase_date' => $this->purchase_date,
			'service_start_date' => $this->service_start_date,
			'expiration_date' => $this->expiration_date,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at
		];
	}
}
