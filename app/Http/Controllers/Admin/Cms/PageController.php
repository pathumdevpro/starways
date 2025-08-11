<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Cms;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.admin.cms.pages.index', [
            'cmsData' => Cms::select('page')->groupBy('page')->orderByRaw('MIN(id)')->get(),
        ]);
    }
}