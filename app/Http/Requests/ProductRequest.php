<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
    public function rules()
    {
        return [
	    'product_name' => 'required|string',
	    'brand_id' => 'required|integer',
	    'size' => 'required|in:S,M,L',
	    'remarks' => 'required|string',
	    'stock' => 'required|integer',
	    'date_of_shipment' => 'required|date'
	];
    }
}
