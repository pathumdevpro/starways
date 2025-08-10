@extends('components.layouts.admin.base')

@section('content')
    <div class="page-wrapper with-navbar with-sidebar">
        @include('components.includes.admin.sidebar')
        <div class="content-wrapper">
            <div class="container-fluid h-full">
                <div class="row justify-content-center align-items-center h-full">
                    <div class="col-12 px-5 text-center">
                        <img src="{{ asset('images/admin/starways-logo-white.png') }}" alt="logo" class="mb-20" width="300">
                        <h2 class="my-0">Admin Panel <span class="version"></span></h2>
                        <div>Manage your account and website</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection