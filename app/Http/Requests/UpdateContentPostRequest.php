<?php

namespace App\Http\Requests;

use App\Models\ContentPost;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContentPostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_posts_edit');
    }


    public function rules()
    {
        return [
            'author_id' => [
                'integer',
                'required',
            ],
            'title'        => [
                'string',
                'required',
            ],
            'slug'        => [
                'string',
               
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
            'tags.*'       => [
                'integer',
            ],
            'tags'         => [
                'array',
            ],
        ];
    }
}