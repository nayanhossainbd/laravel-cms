<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreContentPostRequest;
use App\Http\Requests\UpdateContentPostRequest;
use App\Http\Resources\Admin\ContentPostResource;
use App\Models\ContentPost;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentPostApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('content_posts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentPostResource(ContentPost::with(['categories', 'tags'])->get());
    }

    public function store(StoreContentPostRequest $request)
    {
        
        $contentPost = ContentPost::create($request->all());
        $contentPost->categories()->sync($request->input('categories', []));
        $contentPost->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            $contentPost->addMedia(storage_path('media/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        return (new ContentPostResource($contentPost))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ContentPost $contentPost)
    {
        abort_if(Gate::denies('content_post_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentPostResource($contentPost->load(['categories', 'tags']));
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

        return (new ContentPostResource($contentPost))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ContentPost $contentPost)
    {
        abort_if(Gate::denies('content_post_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPost->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}