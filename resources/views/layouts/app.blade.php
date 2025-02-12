<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ env("APP_NAME") . " | " . $title }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('fonts-bak/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/temposdusmus-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/icheck-boostrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/overlayScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css-bak/flatpickr.min.css') }}">

        @yield('styles')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader"></div>

            @include('includes.header')
            @include('includes.sidebar')

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">{{ $title ?? "Title" }}</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active">{{ $title ?? "Title" }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>

            <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href=""></a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
            </div>
            </footer> -->
        </div>

        <script src="{{ asset('js-bak/jquery.min.js') }}"></script>
        <script src="{{ asset('js-bak/jquery-ui.min.js') }}"></script>
        <script>$.widget.bridge('uibutton', $.ui.button)</script>
        <script src="{{ asset('js-bak/bootstrap-bundle.min.js') }}"></script>
        <script src="{{ asset('js-bak/moment.min.js') }}"></script>
        <script src="{{ asset('js-bak/temposdusmus-bootstrap.min.js') }}"></script>
        <script src="{{ asset('js-bak/overlayScrollbar.min.js') }}"></script>
        <script src="{{ asset('js-bak/adminlte.min.js') }}"></script>
        <script src="{{ asset('js-bak/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js-bak/custom.js') }}"></script>

        <script>
            @if(session('success'))
                ss({{ session('success') }});
            @elseif(session('error'))
                se({{ session('error') }});
            @endif
        </script>

        @stack('scripts');
    </body>
</html>