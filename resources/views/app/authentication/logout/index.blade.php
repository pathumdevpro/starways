<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Logout | {{ env('APP_NAME') }}</title>
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
                                <i class="fa-solid fa-sign-out-alt mr-5"></i> Logout
                            </h1>
                            <form action="{{ route('logout') }}" method="post">
                                @method('post')
                                @csrf
                                <div class="form-group text-center">
                                    <span>Are you sure, you want to logout?</span>
                                </div>
                                <div class="text-center">
                                    <a class="btn mr-5" href="{{ route('index') }}">
                                        <i class="fa-solid fa-times mr-5"></i> Cancel
                                    </a>
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-sign-out-alt mr-5"></i> Logout
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
