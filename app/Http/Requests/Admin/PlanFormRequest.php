<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PlanFormRequest extends FormRequest
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
            'heading_name' => [
                'nullable',
                'string'
            ],
            'price_name' => [
                'nullable',
                'string'
            ],
            'month_years' => [
                'nullable',
                'string'
            ],
             'plan_desc' => [
                'nullable',
            ],
             'tag_name' => [
                'nullable'
             ],
             'about_heading' => [
                'nullable',
                'string'
             ],
             'about_desc' => [
                'nullable'
             ],
             'plan_image' => [
                'nullable',
                'string'
             ]
           ];
           return $rules;
        }
    }