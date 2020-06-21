<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="uk">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ url('public/vendor/favicon.ico') }}">

    <link rel="stylesheet" href="{{ url('public/vendor/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('public/vendor/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/vendor/assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ url('public/vendor/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    @include('admin.components.sidebar')

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        @include('admin.components.header')


        <div class="breadcrumbs">
            @if (Route::currentRouteName() ==  'edit.show')
            <div class="col-sm-2">
                <div class="page-header float-left">
                    <div class="page-title">
                        <a href="@yield('previous_url')">
                                <h1><i class="menu-icon fa fa-undo"></i>
                                    Повернутись</h1>
                        </a>
                    </div>
                </div>
            </div>
            @else
            <div class="col-sm-2">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>@yield('title')</h1>
                    </div>
                </div>
            </div>
            @endif

        </div>

        @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ url('public/vendor/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ url('public/vendor/assets/js/plugins.js') }}"></script>
    <script src="{{ url('public/vendor/assets/js/main.js') }}"></script>



</body>

</html>
