<?php

namespace App\Http\Requests;

use App\Models\ContentPost;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContentPostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_posts_create');
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