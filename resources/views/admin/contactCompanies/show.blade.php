@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contactCompany.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.id') }}
                        </th>
                        <td>
                            {{ $contactCompany->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_name') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_address') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.head_office') }}
                        </th>
                        <td>
                            {{ $contactCompany->head_office }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_email') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.factory') }}
                        </th>
                        <td>
                            {{ $contactCompany->factory }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.thana') }}
                        </th>
                        <td>
                            {{ App\Models\ContactCompany::THANA_SELECT[$contactCompany->thana] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.district') }}
                        </th>
                        <td>
                            {{ App\Models\ContactCompany::DISTRICT_SELECT[$contactCompany->district] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.country') }}
                        </th>
                        <td>
                            {{ App\Models\ContactCompany::COUNTRY_SELECT[$contactCompany->country] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\ContactCompany::TYPE_SELECT[$contactCompany->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_website') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.facbook') }}
                        </th>
                        <td>
                            {{ $contactCompany->facbook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.source') }}
                        </th>
                        <td>
                            {{ App\Models\ContactCompany::SOURCE_SELECT[$contactCompany->source] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection