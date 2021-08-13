<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Habibi @if(View::hasSection('title')) | @yield('title') @endif</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/css/fontawesome-all.min.css') }}">
<link rel="manifest" href="{{ URL::asset('_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('app/icons/icon-192x192.png') }}">
<link rel="stylesheet" class="page-highlight" type="text/css" href="{{ URL::asset('styles/highlights/highlight_red.css') }}">

</head>

<body class="delect-theme" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="page-title page-title-fixed">
        @if(View::hasSection('returnBack')) <a href="/" class="page-title-icon shadow-xl bg-theme color-theme me-0 ms-3"><i class="fa fa-arrow-left"></i></a> @endif
        <h1>@yield('title')</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
    </div>

    <!-- footer menu -->
    <!-- footer menu end -->

    @yield('content')

</div>

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
