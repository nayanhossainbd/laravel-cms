@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.page.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.id') }}
                        </th>
                        <td>
                            {{ $page->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.template') }}
                        </th>
                        <td>
                            {{ App\Models\Page::TEMPLATE_SELECT[$page->template] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.name') }}
                        </th>
                        <td>
                            {{ $page->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.slug') }}
                        </th>
                        <td>
                            {{ $page->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $page->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $page->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.meta_keywords') }}
                        </th>
                        <td>
                            {{ $page->meta_keywords }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.body_content') }}
                        </th>
                        <td>
                           {{htmlspecialchars_decode($page->body_content)  }} 
                           {{-- {!! $page->body_content !!} --}}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection