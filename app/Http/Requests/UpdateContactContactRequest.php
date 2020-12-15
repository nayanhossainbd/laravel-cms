<?php

namespace App\Http\Requests;

use App\Models\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_contact_edit');
    }

    public function rules()
    {
        return [
            'company_id'            => [
                'required',
                'integer',
            ],
            'name'    => [
                'string',
                'nullable',
            ],
            // 'contact_last_name'     => [
            //     'string',
            //     'nullable',
            // ],
            'designation'           => [
                'string',
                'required',
            ],
            'contact_phone_1'       => [
                'string',
                'nullable',
            ],
            'contact_phone_2'       => [
                'string',
                'nullable',
            ],
            'contact_email'         => [
                'string',
                'nullable',
            ],
            'contact_skype'         => [
                'string',
                'nullable',
            ],
            'contact_address'       => [
                'string',
                'nullable',
            ],
            'email_office_personal' => [
                'string',
                'nullable',
            ],
            'email_personal'        => [
                'string',
                'nullable',
            ],
            'telephone'             => [
                'string',
                'nullable',
            ],
            'persona_age'           => [
                'string',
                'nullable',
            ],
            'note'                  => [
                'string',
                'nullable',
            ],
        ];
    }
}