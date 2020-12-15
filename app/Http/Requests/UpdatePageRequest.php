<?php

namespace App\Http\Requests;

use App\Models\Page;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('page_edit');
    }

    public function rules()
    {
        return [
            'template'         => [
                'required',
            ],
            'name'             => [
                'string',
                'max:255',
                'required',
            ],
            'slug'             => [
                'string',
                'nullable',
            ],
            'meta_title'       => [
                'string',
                'nullable',
            ],
            'meta_description' => [
                'string',
                'nullable',
            ],
            'meta_keywords'    => [
                'string',
                'nullable',
            ],
        ];
    }
}