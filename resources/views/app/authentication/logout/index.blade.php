@extends('components.layouts.admin.base')

@section('content')
<div class="page-wrapper with-navbar with-sidebar">
    @include('components.includes.admin.sidebar')
    <div class="content-wrapper">
        <div class="container h-full">
            <div class="row justify-content-center align-items-center h-full">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card p-15">
                        <h1 class="card-title">
                            <i class="fa-solid fa-sign-out-alt mr-5"></i> Logout
                        </h1>
                        <form action="{{ route('logout') }}" method="post">
                            @method('post')
                            @csrf
                            <div class="form-group text-center">
                                <span>Are you sure, you want to logout?</span>
                            </div>
                            <div class="text-center">
                                <button id="back" class="btn mr-5">
                                    <i class="fa-solid fa-times mr-5"></i> Cancel
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-sign-out-alt mr-5"></i> Logout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection