<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CmsContentUpdateRequest;
use App\Models\Cms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    /**
     * Update content.
     */
    public function updateContent(CmsContentUpdateRequest $request)
    {
        $inputs = $request->validated();

        $cmsData = Cms::find($request->id);
        $cmsData->update([
            'content' => $inputs['content'],
        ]);

        return redirect()->route('admin.cms.pages.sections.show', ['page' => $cmsData->page, 'section' => $cmsData->section])->with([
            'success' => 'The content is updated.',
        ]);
    }

    /**
     * Update image.
     */
    public function updateImage(Request $request)
    {
        $cmsData = Cms::find($request->id);

        $dimension = $cmsData->dimension;
        $width = explode('x', $dimension)[0];
        $height = explode('x', $dimension)[1];

        $request->validate([
            'image' => ['required', 'image', 'max:2048', 'dimensions:width=' . $width . ',height=' . $height],
        ]);

        $imageExists = $request->hasFile('image');
        if ($imageExists) {
            $image = $request->file('image');
            $imageName = $image->hashName();

            Storage::putFileAs('cms', $image, $imageName);

            Cms::where('id', $request->id)->update([
                'content' => $imageName,
            ]);
        }

        return redirect()->route('admin.cms.pages.sections.show', ['page' => $cmsData->page, 'section' => $cmsData->section])->with([
            'success' => 'The image is updated.',
        ]);
    }
}
