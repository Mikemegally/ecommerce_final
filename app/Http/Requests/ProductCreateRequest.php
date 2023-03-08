<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name'=>['required','string'],
            'price'=>['required','integer'],
            'count'=>['required','integer'],
            'image'=>['required','image','mimes:png,jpg,jpeg','max:8000'],
            'description'=>['required'],
            'category_id'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'category_id.required'=>['category name is required']
        ];
    }
}
