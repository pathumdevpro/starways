@extends('components.layouts.admin.base')

@section('content')
<div class="page-wrapper with-navbar with-sidebar">
    @include('components.includes.admin.sidebar')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row row-eq-spacing align-items-center">
                <div class="col-12 col-sm-auto mb-sm-0 mb-20">
                    <button class="btn" id="back">
                        <i class="fa fa-chevron-left mr-5"></i> Back
                    </button>
                </div>
                <div class="col-12 col-sm-auto">
                    <h4 class="my-0">
                        <i class="fa-solid fa-code-fork mr-5"></i> CMS
                    </h4>
                </div>
            </div>
            <div class="row row-eq-spacing">
                <div class="col-12">
                    <div class="card p-15">
                        <h1 class="card-title">
                            <i class="fa fa-database mr-5"></i> All Pages
                        </h1>
                        <div class="table-responsive">
                            <table class="table-bordered table">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th class="w-25"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cmsData as $cms)
                                    <tr>
                                        <td>
                                            <div class="text-wrap">{{ $cms->page }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn-primary btn-square mr-5" href="{{ route('admin.cms.pages.sections.index', ['page' => $cms->page]) }}">
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection