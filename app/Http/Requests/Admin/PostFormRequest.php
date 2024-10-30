<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
       $rules = [

        'category_id' => [
            'required',
            'integer'
        ],
        'name' => [
            'required',
            'string'
        ],
        'slug' => [
            'required',
            'string'
        ],
        'short_description' => [
            'required'
        ],
         'description' => [
            'required'
        ],
         'tags' => [
            'nullable'
        ],
        'yt_frame' => [
            'nullable',
            'string'
        ],
        'meta_title' => [
            'required',
            'string'
        ],
        'meta_description' => [
            'nullable',
            'string'
        ],
        'meta_keyword' => [
            'nullable',
            'string'
        ],
        'ads_main' => [
            'nullable'
        ],
        'ads_sidebar' => [
            'nullable'
        ],
        'right_sidebar' => [
            'nullable'
        ],
        'status' => [
            'nullable'
        ]
       ];
       return $rules;
    }
}
