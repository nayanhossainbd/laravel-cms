@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contactContact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contact-contacts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="company_id">{{ trans('cruds.contactContact.fields.company') }}</label>
                <select class="form-control select2 {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company_id" id="company_id" required>
                    @foreach($companies as $id => $company)
                        <option value="{{ $id }}" {{ old('company_id') == $id ? 'selected' : '' }}>{{ $company }}</option>
                    @endforeach
                </select>
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.contactContact.fields.contact_name') }}</label>
                <input class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('contact_name'))
                    <span class="text-danger">{{ $errors->first('contact_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_name_helper') }}</span>
            </div>
            {{-- <div class="form-group">
                <label for="contact_last_name">{{ trans('cruds.contactContact.fields.contact_last_name') }}</label>
                <input class="form-control {{ $errors->has('contact_last_name') ? 'is-invalid' : '' }}" type="text" name="contact_last_name" id="contact_last_name" value="{{ old('contact_last_name', '') }}">
                @if($errors->has('contact_last_name'))
                    <span class="text-danger">{{ $errors->first('contact_last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_last_name_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <label class="required" for="designation">{{ trans('cruds.contactContact.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', '') }}" required>
                @if($errors->has('designation'))
                    <span class="text-danger">{{ $errors->first('designation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_phone_1">{{ trans('cruds.contactContact.fields.contact_phone_1') }}</label>
                <input class="form-control {{ $errors->has('contact_phone_1') ? 'is-invalid' : '' }}" type="text" name="contact_phone_1" id="contact_phone_1" value="{{ old('contact_phone_1', '') }}">
                @if($errors->has('contact_phone_1'))
                    <span class="text-danger">{{ $errors->first('contact_phone_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_phone_2">{{ trans('cruds.contactContact.fields.contact_phone_2') }}</label>
                <input class="form-control {{ $errors->has('contact_phone_2') ? 'is-invalid' : '' }}" type="text" name="contact_phone_2" id="contact_phone_2" value="{{ old('contact_phone_2', '') }}">
                @if($errors->has('contact_phone_2'))
                    <span class="text-danger">{{ $errors->first('contact_phone_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_email">{{ trans('cruds.contactContact.fields.contact_email') }}</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="text" name="contact_email" id="contact_email" value="{{ old('contact_email', '') }}">
                @if($errors->has('contact_email'))
                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_skype">{{ trans('cruds.contactContact.fields.contact_skype') }}</label>
                <input class="form-control {{ $errors->has('contact_skype') ? 'is-invalid' : '' }}" type="text" name="contact_skype" id="contact_skype" value="{{ old('contact_skype', '') }}">
                @if($errors->has('contact_skype'))
                    <span class="text-danger">{{ $errors->first('contact_skype') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_skype_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_address">{{ trans('cruds.contactContact.fields.contact_address') }}</label>
                <input class="form-control {{ $errors->has('contact_address') ? 'is-invalid' : '' }}" type="text" name="contact_address" id="contact_address" value="{{ old('contact_address', '') }}">
                @if($errors->has('contact_address'))
                    <span class="text-danger">{{ $errors->first('contact_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_office_personal">{{ trans('cruds.contactContact.fields.email_office_personal') }}</label>
                <input class="form-control {{ $errors->has('email_office_personal') ? 'is-invalid' : '' }}" type="text" name="email_office_personal" id="email_office_personal" value="{{ old('email_office_personal', '') }}">
                @if($errors->has('email_office_personal'))
                    <span class="text-danger">{{ $errors->first('email_office_personal') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.email_office_personal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_personal">{{ trans('cruds.contactContact.fields.email_personal') }}</label>
                <input class="form-control {{ $errors->has('email_personal') ? 'is-invalid' : '' }}" type="text" name="email_personal" id="email_personal" value="{{ old('email_personal', '') }}">
                @if($errors->has('email_personal'))
                    <span class="text-danger">{{ $errors->first('email_personal') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.email_personal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="telephone">{{ trans('cruds.contactContact.fields.telephone') }}</label>
                <input class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="text" name="telephone" id="telephone" value="{{ old('telephone', '') }}">
                @if($errors->has('telephone'))
                    <span class="text-danger">{{ $errors->first('telephone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.telephone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="persona_age">{{ trans('cruds.contactContact.fields.persona_age') }}</label>
                <input class="form-control {{ $errors->has('persona_age') ? 'is-invalid' : '' }}" type="text" name="persona_age" id="persona_age" value="{{ old('persona_age', '') }}">
                @if($errors->has('persona_age'))
                    <span class="text-danger">{{ $errors->first('persona_age') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.persona_age_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.contactContact.fields.note') }}</label>
                <input class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" type="text" name="note" id="note" value="{{ old('note', '') }}">
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.note_helper') }}</span>
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