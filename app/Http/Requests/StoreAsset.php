<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Category;

class StoreAsset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
			return [
				'name' => 'required|string|max:255',
				'category' => 'required|integer|min:0',
				'amount' => 'required|numeric|min:0|max:10000000',
				'purchase_date' => 'date',
				'service_start_date' => 'required|date',
				'expiration_date' => 'required|date',
			];
    }
}
