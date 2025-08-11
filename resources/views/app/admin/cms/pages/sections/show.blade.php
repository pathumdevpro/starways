@extends('components.layouts.admin.base')

@section('content')
<div class="page-wrapper with-navbar with-sidebar">
    @include('components.includes.admin.sidebar')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row row-eq-spacing align-items-center">
                <div class="col-12 col-sm-auto mb-sm-0 mb-20">
                    <button class="btn" id="back">
                        <i class="fa-solid fa-chevron-left mr-5"></i> Back
                    </button>
                </div>
                <div class="col-12 col-sm-auto">
                    <h4 class="my-0">
                        <i class="fa-solid fa-code-fork mr-5"></i> CMS/{{ $cmsData[0]['page'] }}:{{ $cmsData[0]['section'] }}
                    </h4>
                </div>
            </div>
            <div class="row row-eq-spacing">
                <div class="col-12">
                    <div class="card p-15">
                        <div class="row justify-content-start justify-content-sm-between align-items-center mb-20">
                            <div class="col-12 col-lg-auto mb-lg-0 mb-10">
                                <h1 class="card-title mb-0">
                                    <i class="fa-solid fa-pen-to-square mr-5"></i> Update Section
                                </h1>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Content</th>
                                        <th class="w-25"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cmsData as $cms)
                                    @if ($cms->image == null)
                                    <form action="{{ route('admin.cms.update-content') }}" method="post">
                                        @method('put')
                                        @csrf
                                        <tr>
                                            <input name="id" type="hidden" value="{{ $cms->id }}">
                                            <td>{{ $cms->position }}</td>
                                            <td>
                                                <textarea class="form-control h-100" id="content" name="content" placeholder="Content" required>{{ $cms->content }}</textarea>
                                            </td>
                                            <td class="w-25">
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-success btn-square mr-5">
                                                        <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    @else
                                    <form action="{{ route('admin.cms.update-image') }}" enctype="multipart/form-data" method="post">
                                        @method('put')
                                        @csrf
                                        <tr>
                                            <input name="id" type="hidden" value="{{ $cms->id }}">
                                            <td>{{ $cms->position }}</td>
                                            <td>
                                                <div class="custom-file">
                                                    <div>
                                                        <img alt="image" class="img-fluid w-150" src="{{ $cms->content != null ? Storage::url('cms/' . $cms->content) : asset($cms->image) }}  ">
                                                        <input accept=".jpg,.jpeg,.png,.webp" data-default-value="{{ $cms->content != null ? $cms->content : $cms->image }}" id="image{{ $cms->id }}" name="image" type="file">
                                                    </div>
                                                    <div class="form-text">
                                                        <small>Allowed formats are JPG, PNG and WEBP</small><br>
                                                        <small>Allowed resolution is {{ $cms->dimension }}</small><br>
                                                        <small>Maximum size is 2MB</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-25">
                                                <div class="d-flex justify-content-end">
                                                    <label class="btn btn-primary btn-square mr-5" for="image{{ $cms->id }}">
                                                        <i class="fa-solid fa-upload"></i>
                                                    </label>
                                                    <button class="btn btn-success btn-square mr-5">
                                                        <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    @endif
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