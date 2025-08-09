<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Reset Password | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('vendor/authentication/images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('vendor/authentication/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/authentication/css/halfmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/authentication/css/style.css') }}" rel="stylesheet">
</head>

<body class="dark-mode with-custom-css-scrollbars with-custom-webkit-scrollbars">
    <div class="page-wrapper">
        <div class="content-wrapper">
            <div class="container h-full">
                <div class="row justify-content-center align-items-center h-full">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="text-center">
                            <img alt="logo" src="{{ asset('vendor/authentication/images/logo.svg') }}" width="150">
                        </div>
                        <div class="card p-15">
                            <h1 class="card-title">
                                <i class="fa-solid fa-redo mr-5"></i> Reset Password
                            </h1>
                            @if (session('success'))
                                <div class="alert alert-success mb-20">{{ session('success') }}</div>
                            @endif
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger mb-20">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form action="{{ route('reset-password') }}" method="post">
                                @method('post')
                                @csrf
                                <input name="email" type="hidden" value="{{ $email }}">
                                <input name="token" type="hidden" value="{{ $token }}">
                                <div class="form-group">
                                    <label class="required" for="password">Enter password</label>
                                    <input autocomplete="off" class="form-control" id="password" maxlength="32" minlength="8" name="password" placeholder="Password" required type="password">
                                </div>
                                <div class="form-group">
                                    <label class="required" for="confirm_password">Confirm password</label>
                                    <input autocomplete="off" class="form-control" id="confirm_password" maxlength="32" minlength="8" name="confirm_password" placeholder="Confirm Password" required type="password">
                                </div>
                                <div class="text-right">
                                    <button class="btn">
                                        <i class="fa-solid fa-redo mr-5"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="text-center">
                            <span>&copy; {{ date('Y') }} <a class="text-light" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>.</span><br>
                            <span>Designed By <a class="text-light" href="https://phyxle.com" target="_blank">Phyxle</a>.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/authentication/js/halfmoon.js') }}"></script>
</body>

</html>
