<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        'name' =>[
            'required',
            'string',
            'max:300'
        ],
        'slug' =>[
            'required',
            'string',
            'max:300'
        ],
        'description' =>[
            'required'
        ],
        'cat_image' =>[
            'nullable',
            'image:jpeg,jpg,png'
        ],
        'meta_title' =>[
            'required',
            'string',
            'max:300'
        ],
        'meta_description' =>[
            'required',
            'string'
        ],
        'meta_keyword' =>[
            'required',
            'string'
        ],
        'navbar_status' =>[
            'nullable'
        ],
        'navbar_footer' =>[
            'nullable'
        ],
        'navbar_sidebar' =>[
            'nullable'
        ],
        'status' =>[
            'nullable'
        ],
       ];
       return $rules;
    }
}
