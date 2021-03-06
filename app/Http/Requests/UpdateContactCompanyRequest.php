<?php

namespace App\Http\Requests;

use App\Models\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_company_edit');
    }

    public function rules()
    {
        return [
            'company_name'    => [
                'string',
                'required',
                'unique:contact_companies,company_name,' . request()->route('contact_company')->id,
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'head_office'     => [
                'string',
                'nullable',
            ],
            'company_email'   => [
                'string',
                'nullable',
            ],
            'factory'         => [
                'string',
                'nullable',
            ],
            'company_website' => [
                'string',
                'nullable',
            ],
            'facbook'         => [
                'string',
                'nullable',
            ],
            'source'          => [
                'required',
            ],
        ];
    }
}