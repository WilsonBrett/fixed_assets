<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Category;

class UpdateAsset extends FormRequest
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
    	//@TODO: uncomment expiration date when figure out how to pass disabled field value in form submit
			return [
				'name' => 'required|string|max:255',
				'category' => 'required|integer|min:0',
				'amount' => 'required|numeric|min:0|max:10000000',
				'purchase_date' => 'required|date',
				'service_start_date' => 'required|date',
				'expiration_date' => 'required|date',
			];
    }
}
