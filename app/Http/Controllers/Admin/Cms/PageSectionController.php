<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Cms;

class PageSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $page)
    {
        return view('app.admin.cms.pages.sections.index', [
            'cmsData' => Cms::select('page', 'section')->where('page', $page)->groupBy('page', 'section')->orderByRaw('MIN(id)')->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $page, string $section)
    {
        return view('app.admin.cms.pages.sections.show', [
            'cmsData' => Cms::where('page', $page)->where('section', $section)->orderBy('id', 'asc')->get(),
        ]);
    }
}
