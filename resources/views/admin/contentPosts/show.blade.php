@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contentPost.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.id') }}
                        </th>
                        <td>
                            {{ $contentPost->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.title') }}
                        </th>
                        <td>
                            {{ $contentPost->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.category') }}
                        </th>
                        <td>
                            @foreach($contentPost->categories as $key => $category)
                                <span class="label label-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.tag') }}
                        </th>
                        <td>
                            @foreach($contentPost->tags as $key => $tag)
                                <span class="label label-info">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.page_text') }}
                        </th>
                        <td>
                            {!! $contentPost->page_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.excerpt') }}
                        </th>
                        <td>
                            {{ $contentPost->excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPost.fields.featured_image') }}
                        </th>
                        <td>
                            @if($contentPost->featured_image)
                                <a href="{{ $contentPost->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $contentPost->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection