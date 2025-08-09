<!DOCTYPE html>

@if (Route::currentRouteName() === 'contact.index')
    <html data-wf-page="642b977704ea370b045dcd31" data-wf-site="63f3c02b670c563640ba280f" lang="en">
@elseif (Route::currentRouteName() === 'index')
    <html data-wf-page="642b977704ea37fcf05dcce3" data-wf-site="63f3c02b670c563640ba280f" lang="en">
        <!-- set it allow for all the services* pages -->
@elseif (Route::is('services.*'))
    <html data-wf-page="642b977704ea37570c5dcd34" data-wf-site="63f3c02b670c563640ba280f" lang="en" data-wf-collection="642b977704ea37e0c45dcce7" data-wf-item-slug="financial-planning">
@elseif (Route::is('blogs.index'))
    <html data-wf-page="642b977704ea3729965dcd05" data-wf-site="63f3c02b670c563640ba280f" lang="en">
@elseif (Route::is('blogs.show'))
    <html data-wf-page="642b977704ea37cd395dcd33" data-wf-site="63f3c02b670c563640ba280f" lang="en"
        data-wf-collection="642b977704ea37977f5dcce8" data-wf-item-slug="we-launch-corporatex-template-this-week">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="XynoSync (info@xynosync.com)" name="author">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="Pathum Bandara (pathumbandarame@gmail.com)" name="author">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript">
        !(function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            (n.className += t + "js"),
            ("ontouchstart" in o ||
                (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
        })(window, document);
    </script>
</head>

<body>
    <div class="content">
        @include('components.includes.header')
        @yield('content')
        @include('components.includes.whatsapp-cto-btn')
        @include('components.includes.footer')
        @include('components.includes.top')
    </div>
    <script src="{{ asset('js/jquery.js?site=63f3c02b670c563640ba280f') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script-minified1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script-minified2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</body>

</html>