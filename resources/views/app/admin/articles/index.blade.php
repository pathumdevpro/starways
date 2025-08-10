@extends('components.layouts.admin.base')

@section('content')
    <div class="page-wrapper with-navbar with-sidebar">
        @include('components.includes.admin.sidebar')
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row row-eq-spacing align-items-center">
                    <div class="col-12 col-sm-auto mb-sm-0 mb-20">
                        <button id="back" class="btn">
                            <i class="fa-solid fa-chevron-left mr-5"></i> Back
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
                                <i class="fa-solid fa-plus mr-5"></i> Create Article
                            </h1>
                            @if (session('success'))
                                <div class="alert alert-success mb-20">{{ session('success') }}</div>
                            @endif
                            @if ($errors->all())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger mb-20">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="required">Enter title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" maxlength="255" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="required">Enter content</label>
                                    <textarea name="content" id="content" class="form-control h-200" placeholder="Content" required></textarea>
                                    <div class="form-text">
                                        <small>Markdown is supported</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="required">Choose image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.webp" required>
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
                                        <i class="fa-solid fa-plus mr-5"></i> Create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-9">
                        <div class="card p-15">
                            <div class="row justify-content-start justify-content-sm-between align-items-center mb-20">
                                <div class="col-12 col-lg-auto mb-lg-0 mb-10">
                                    <h1 class="card-title mb-0">
                                        <i class="fa-solid fa-database mr-5"></i> All Articles
                                    </h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table-bordered table">
                                    <thead>
                                        <tr>
                                            <th class="w-25">ID</th>
                                            <th class="w-25">Thumbnail</th>
                                            <th>Title</th>
                                            <th class="w-25"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($articles as $article)
                                            <tr>
                                                <td>
                                                    <div class="text-wrap">{{ $article->id }}</div>
                                                </td>
                                                <td>
                                                    <img src="{{ Storage::url('articles/' . $article->image) }}" alt="article" class="img-fluid">
                                                </td>
                                                <td>
                                                    <span class="text-wrap">{{ $article->title }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('admin.articles.show', $article) }}" class="btn btn-square mr-5">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <form action="{{ route('admin.articles.destroy', $article) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-square">
                                                                <i class="fa-solid fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="4">
                                                    <i class="fa fa-frown mr-5"></i> No articles found!
                                                </td>
                                            </tr>
                                        @endforelse
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
