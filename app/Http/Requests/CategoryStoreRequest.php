<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            // 'title' =>'required|max:50',
            'en_title' => [
                'required_with:el_title'
            ],
            'el_title' => [
                'required_with:en_title'
            ],
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'featured' => '',
        ];
    }
}
