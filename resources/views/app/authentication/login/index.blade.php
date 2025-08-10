@extends('components.layouts.admin.base')

@section('content')
<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="container h-full">
            <div class="row justify-content-center align-items-center h-full">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="text-center">
                        <img src="{{ asset('images/starways-logo-white.png') }}" alt="logo" width="200">
                    </div>
                    <div class="card p-15">
                        <h1 class="card-title">
                            <i class="fa-solid fa-sign-in-alt mr-5"></i> Login
                        </h1>
                        <form action="{{ route('login') }}" method="post">
                            @method('post')
                            @csrf
                            @if (session('success'))
                            <div class="alert alert-success mb-20">{{ session('success') }}</div>
                            @endif
                            @if ($errors->all())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger mb-20">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="form-group">
                                <label for="email" class="required">Enter email address</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" maxlength="255" autocomplete="off" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="required">Enter password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" minlength="8" maxlength="32" autocomplete="off" required>
                            </div>
                            <div class="text-right">
                                <button class="btn">
                                    <i class="fa-solid fa-sign-in-alt mr-5"></i> Login
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <span>Designed and developed by <a href="#" target="_blank" class="text-light">{{ env('APP_NAME') }}</a>.</span><br>
                        <small>Current version: <span class="version"></span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection