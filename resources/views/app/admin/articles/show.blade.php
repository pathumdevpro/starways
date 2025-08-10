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
                            <i class="fa-solid fa-file-lines mr-5"></i> Articles
                        </h4>
                    </div>
                </div>
                <div class="row row-eq-spacing">
                    <div class="col-12 col-sm-6 col-lg-3 mb-sm-0 mb-20">
                        <div class="card p-15">
                            <h1 class="card-title">
                                <i class="fa fa-check mr-5"></i> Update Article
                            </h1>
                            @if (session('success'))
                                <div class="alert alert-success mb-20">{{ session('success') }}</div>
                            @endif
                            @if ($errors->all())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger mb-20">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label class="required" for="title">Enter title</label>
                                    <input autocomplete="off" class="form-control" id="title" maxlength="255" name="title" placeholder="Title" required type="text" value="{{ $article->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="required" for="content">Enter content</label>
                                    <textarea class="form-control h-200" id="content" name="content" placeholder="Content" required>{{ $article->content }}</textarea>
                                    <div class="form-text">
                                        <small>Markdown is supported</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image">Choose image</label>
                                    <div class="custom-file">
                                        <input accept=".jpg,.jpeg,.png,.webp" data-default-value="{{ $article->image }}" id="image" name="image" type="file">
                                        <label for="image">Choose</label>
                                    </div>
                                    <div class="form-text">
                                        <small>Allowed formats are JPG, PNG and WEBP</small><br>
                                        <small>Allowed resolution is 1920x1080</small><br>
                                        <small>Maximum size is 2MB</small>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn">
                                        <i class="fa-solid fa-check mr-5"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-9">
                        <div class="card p-15">
                            <h1 class="card-title">
                                <i class="fa fa-info-circle mr-5"></i> Information
                            </h1>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 pr-md-10 mb-md-0 mb-20 pr-0">
                                    <img alt="article" class="img-fluid" src="{{ Storage::url('articles/' . $article->image) }}">
                                </div>
                                <div class="col-12 col-md-6 col-lg-8 pl-md-10 markdown pl-0">
                                    <h4 class="mt-0 mb-10">Content</h4>
                                    <p class="mt-0 mb-20">
                                        <x-markdown>{{ $article->content }}</x-markdown>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table-bordered table">
                                            <tbody>
                                                <tr>
                                                    <th class="w-25">ID</th>
                                                    <td>{{ $article->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="w-25">Slug</th>
                                                    <td>{{ $article->slug }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="w-25">Title</th>
                                                    <td>{{ $article->title }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="w-25">Created Date</th>
                                                    <td>{{ date('Y-m-d', strtotime($article->created_at)) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
