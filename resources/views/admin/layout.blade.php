<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>admin - @yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/css/fontawesome-all.min.css') }}">
<link rel="manifest" href="{{ URL::asset('admin/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('app/icons/icon-192x192.png') }}">
<link rel="stylesheet" class="page-highlight" type="text/css" href="{{ URL::asset('styles/highlights/highlight_red.css') }}">

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

</head>

<body class="detect-theme" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div class="page-content" style="min-height:100vh;">
<div id="page">

    <!-- <div class="header header-fixed header-logo-center">
        <span class="header-title">
            <img src="{{ asset('images/logo.jfif') }}" height="49px" alt="">
        </span>
        <a href="#" data-toggle-theme class="header-icon header-icon-1 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-1 show-on-theme-light"><i class="fas fa-moon"></i></a>
        @yield('buttons')
    </div> -->

    <div class="page-title page-title-fixed">
        <h1>@yield('title')</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        @yield('buttons')
    </div>

    <!-- footer menu -->
    <div id="footer-bar" class="footer-bar-6">
        <a href="{{ route('admin.hookah.index') }}" class="@if (app()->view->getSections()['menu-num'] == 1) active-nav @endif"><i class="fa fa-layer-group"></i><span>Кальяны</span></a>
        <a href="index-pages.html" class="@if (app()->view->getSections()['menu-num'] == 2) active-nav @endif"><i class="fa fa-file"></i><span>Бар</span></a>
        <a href="{{ route('admin.home.dashboard') }}" class="circle-nav @if (app()->view->getSections()['menu-num'] == 3) active-nav @endif"><i class="fa fa-home"></i><span>Главная</span></a>
        <a href="index-projects.html" class="@if (app()->view->getSections()['menu-num'] == 4) active-nav @endif"><i class="fa fa-camera"></i><span>Услуги</span></a>
        <a href="#" data-menu="menu-main" class="@if (app()->view->getSections()['menu-num'] == 5) active-nav @endif"><i class="fa fa-bars"></i><span>С собой</span></a>
    </div>
    <!-- footer menu end -->

    @yield('content')

</div>
</div>

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
