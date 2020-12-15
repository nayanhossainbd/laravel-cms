@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contactCompany.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contact-companies.update", [$contactCompany->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="company_name">{{ trans('cruds.contactCompany.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $contactCompany->company_name) }}" required>
                @if($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.contactCompany.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $contactCompany->company_address) }}">
                @if($errors->has('company_address'))
                    <span class="text-danger">{{ $errors->first('company_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="head_office">{{ trans('cruds.contactCompany.fields.head_office') }}</label>
                <input class="form-control {{ $errors->has('head_office') ? 'is-invalid' : '' }}" type="text" name="head_office" id="head_office" value="{{ old('head_office', $contactCompany->head_office) }}">
                @if($errors->has('head_office'))
                    <span class="text-danger">{{ $errors->first('head_office') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.head_office_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_email">{{ trans('cruds.contactCompany.fields.company_email') }}</label>
                <input class="form-control {{ $errors->has('company_email') ? 'is-invalid' : '' }}" type="text" name="company_email" id="company_email" value="{{ old('company_email', $contactCompany->company_email) }}">
                @if($errors->has('company_email'))
                    <span class="text-danger">{{ $errors->first('company_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="factory">{{ trans('cruds.contactCompany.fields.factory') }}</label>
                <input class="form-control {{ $errors->has('factory') ? 'is-invalid' : '' }}" type="text" name="factory" id="factory" value="{{ old('factory', $contactCompany->factory) }}">
                @if($errors->has('factory'))
                    <span class="text-danger">{{ $errors->first('factory') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.factory_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.contactCompany.fields.thana') }}</label>
                <select class="form-control {{ $errors->has('thana') ? 'is-invalid' : '' }}" name="thana" id="thana">
                    <option value disabled {{ old('thana', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactCompany::THANA_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('thana', $contactCompany->thana) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('thana'))
                    <span class="text-danger">{{ $errors->first('thana') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.thana_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.contactCompany.fields.district') }}</label>
                <select class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" id="district">
                    <option value disabled {{ old('district', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactCompany::DISTRICT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('district', $contactCompany->district) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('district'))
                    <span class="text-danger">{{ $errors->first('district') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.district_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.contactCompany.fields.country') }}</label>
                <select class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country" id="country">
                    <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactCompany::COUNTRY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('country', $contactCompany->country) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.contactCompany.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactCompany::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $contactCompany->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_website">{{ trans('cruds.contactCompany.fields.company_website') }}</label>
                <input class="form-control {{ $errors->has('company_website') ? 'is-invalid' : '' }}" type="text" name="company_website" id="company_website" value="{{ old('company_website', $contactCompany->company_website) }}">
                @if($errors->has('company_website'))
                    <span class="text-danger">{{ $errors->first('company_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facbook">{{ trans('cruds.contactCompany.fields.facbook') }}</label>
                <input class="form-control {{ $errors->has('facbook') ? 'is-invalid' : '' }}" type="text" name="facbook" id="facbook" value="{{ old('facbook', $contactCompany->facbook) }}">
                @if($errors->has('facbook'))
                    <span class="text-danger">{{ $errors->first('facbook') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.facbook_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.contactCompany.fields.source') }}</label>
                <select class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source" id="source" required>
                    <option value disabled {{ old('source', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactCompany::SOURCE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('source', $contactCompany->source) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('source'))
                    <span class="text-danger">{{ $errors->first('source') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection