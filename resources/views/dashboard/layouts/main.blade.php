<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WPU Blog | {{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.umd.min.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>

    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">

            @include('dashboard.layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/feather/feather.min.js ') }}"></script>
    <script src="{{ asset('js/jquery.js ') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

</body>

</html>
