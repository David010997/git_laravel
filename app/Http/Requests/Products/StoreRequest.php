<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required|string|between:10,600',
            'gender'=>'required|string',
            'category_id'=>'required|exists:categories,id',
            'material_id'=>'required|exists:materials,id',
            'color_ids'=>'required|array',
            'color_ids.*'=>'integer|required|exists:colors,id',
            'size_ids'=>'required|array',
            'size_ids.*'=>'integer|required|exists:sizes,id',
            'product_image'=>'required|file'
        ];
    }
}
