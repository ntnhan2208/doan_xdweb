<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'detail' => 'required',
            'cost'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('site.food.validation.name_not_empty'),
            'detail.required' => trans('site.food.validation.detail_not_empty'),
            'cost.required'=>trans('site.food.validation.price_not_empty'),
            'cost.numeric'=>trans('site.food.validation.price_number'),
        ];

    }
}
