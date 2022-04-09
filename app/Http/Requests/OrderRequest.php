<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'phone'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('site.food.validation.name_not_empty'),
            'address.required'=>trans('site.order.validation.address_not_empty'),
            'phone.required'=>trans('site.order.validation.phone_not_empty'),
            'phone.numeric'=>trans('site.order.validation.phone_number'),
        ];
    }
}
