@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.menu.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.menus.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.menu.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="slug">{{ trans('cruds.menu.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.menu.fields.parent') }}</label>
                <select class="form-control {{ $errors->has('menu_id') ? 'is-invalid' : '' }}" name="menu_id" id="menu_id">
                    <option value disabled {{ old('menu_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @php( $menus = \App\Models\Menu::all()) 
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}" {{ old('menu_id', '') === (string) $menu->id ? 'selected' : '' }}>{{ $menu->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('menu_id'))
                    <span class="text-danger">{{ $errors->first('menu_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.menu.fields.menu_id_helper') }}</span>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="page-link">
                    <label class="form-check-label" for="inlineRadio1">Page Link</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="external-link">
                    <label class="form-check-label" for="inlineRadio2">External Link</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="internal-link">
                    <label class="form-check-label" for="inlineRadio3">Internal Link</label>
                </div>
                {{-- <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Menu::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', '-') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select> --}}
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


@section('scripts')
<script>
<script>
  $('document').ready(function () {

    $(document).on('change', 'input#name', function() {
        console.log('hello')
      var slug = slugify($(this).val());
      $('input#slug').text(slug);
    });

  });

  function slugify(text)
  {
    return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
  }
</script>
</script>
@endsection