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
                            <i class="fa-solid fa-user mr-5"></i> Profile
                        </h4>
                    </div>
                </div>
                <div class="row row-eq-spacing">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card p-15">
                            <h1 class="card-title">
                                <i class="fa-solid fa-check mr-5"></i> Update Password
                            </h1>
                            <form action="{{ route('admin.accounts.update-password') }}" method="post">
                                @method('put')
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
                                    <label for="new-password" class="required">Enter new password</label>
                                    <input type="password" name="new_password" id="new-password" class="form-control" placeholder="New Password" minlength="8" maxlength="32" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm-new-password" class="required">Confirm new password</label>
                                    <input type="password" name="confirm_new_password" id="confirm-new-password" class="form-control" placeholder="Confirm New Password" minlength="8" maxlength="32" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="current-password" class="required">Enter current password</label>
                                    <input type="password" name="current_password" id="current-password" class="form-control" placeholder="Current Password" minlength="8" maxlength="32" autocomplete="off" required>
                                </div>
                                <div class="text-right">
                                    <button class="btn">
                                        <i class="fa-solid fa-check mr-5"></i> Update
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
