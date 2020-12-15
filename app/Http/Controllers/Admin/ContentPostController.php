<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContentPostRequest;
use App\Http\Requests\StoreContentPostRequest;
use App\Http\Requests\UpdateContentPostRequest;
use App\Models\ContentCategory;
use App\Models\ContentPost;
use App\Models\ContentTag;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContentPostController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('content_posts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPosts = ContentPost::all();

        return view('admin.contentPosts.index', compact('contentPosts'));
    }

    public function create()
    {
        abort_if(Gate::denies('content_posts_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::all()->pluck('name', 'id');

        $tags = ContentTag::all()->pluck('name', 'id');

        return view('admin.contentPosts.create', compact('categories', 'tags'));
    }

    public function store(StoreContentPostRequest $request)
    {


        $contentPost = ContentPost::create($request->all());
        $contentPost->categories()->sync($request->input('categories', []));
        $contentPost->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            $contentPost->addMedia(storage_path('media/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contentPost->id]);
        }

        return redirect()->route('admin.content-posts.index');
    }

    public function edit(ContentPost $contentPost)
    {
        abort_if(Gate::denies('content_posts_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::all()->pluck('name', 'id');

        $tags = ContentTag::all()->pluck('name', 'id');

        $contentPost->load('categories', 'tags');

        return view('admin.contentPosts.edit', compact('categories', 'tags', 'contentPost'));
    }

    public function update(UpdateContentPostRequest $request, ContentPost $contentPost)
    {
        $contentPost->update($request->all());
        $contentPost->categories()->sync($request->input('categories', []));
        $contentPost->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            if (!$contentPost->featured_image || $request->input('featured_image') !== $contentPost->featured_image->file_name) {
                if ($contentPost->featured_image) {
                    $contentPost->featured_image->delete();
                }

                $contentPost->addMedia(storage_path('media/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
            }
        } elseif ($contentPost->featured_image) {
            $contentPost->featured_image->delete();
        }

        return redirect()->route('admin.content-posts.index');
    }

    public function show(ContentPost $contentPost)
    {
        abort_if(Gate::denies('content_posts_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPost->load('categories', 'tags');

        return view('admin.contentPosts.show', compact('contentPost'));
    }

    public function destroy(ContentPost $contentPost)
    {
        abort_if(Gate::denies('content_posts_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPost->delete();

        return back();
    }

    public function massDestroy(MassDestroyContentPostRequest $request)
    {
        ContentPost::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('content_posts_create') && Gate::denies('content_post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ContentPost();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}