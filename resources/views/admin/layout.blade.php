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

<div id="page" style="min-height:100vh;">

    <div class="page-title page-title-fixed">
        <h1>@yield('title')</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        @yield('buttons')
    </div>

    <!-- footer menu -->
    <div id="footer-bar" class="footer-bar-6">
        <a href="{{ route('admin.hookah.index') }}" class="@if (app()->view->getSections()['menu-num'] == 1) active-nav @endif"><i class="fas fa-smoking"></i><span>Кальяны</span></a>
        <a href="{{ route('admin.bar.index') }}" class="@if (app()->view->getSections()['menu-num'] == 2) active-nav @endif"><i class="fas fa-glass-cheers"></i><span>Бар</span></a>
        <a href="{{ route('admin.home.dashboard') }}" class="circle-nav @if (app()->view->getSections()['menu-num'] == 3) active-nav @endif"><i class="fa fa-home"></i><span>Главная</span></a>
        <a href="#" class="@if (app()->view->getSections()['menu-num'] == 4) active-nav @endif"><i class="fas fa-concierge-bell"></i><span>Услуги</span></a>
        <a href="#" class="@if (app()->view->getSections()['menu-num'] == 5) active-nav @endif"><i class="fas fa-taxi"></i><span>С собой</span></a>
    </div>
    <!-- footer menu end -->

    @yield('content')

</div>

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
