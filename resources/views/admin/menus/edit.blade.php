@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.menu.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.menus.update", [$menu->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.menu.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $menu->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.menu.fields.parent') }}</label>
                <select class="form-control {{ $errors->has('menu_id') ? 'is-invalid' : '' }}" name="menu_id" id="menu_id">
                    <option value disabled {{ old('menu_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                   @php( $parents = \App\Models\Menu::all()) 
                    @foreach($parents as $parent)
                        <option value="{{ $parent->id }}" {{ old('parent', '') === (string) $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent'))
                    <span class="text-danger">{{ $errors->first('parent') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.parent_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.menu.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Menu::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $menu->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.type_helper') }}</span>
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