<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Habibi</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/css/fontawesome-all.min.css') }}">
<link rel="manifest" href="{{ URL::asset('_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('app/icons/icon-192x192.png') }}">
<link rel="stylesheet" class="page-highlight" type="text/css" href="{{ URL::asset('styles/highlights/highlight_red.css') }}">

</head>

<body class="theme-dark" data-highlight="highlight-red" style="overflow-y: none;">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="header header-fixed header-logo-center">
        <span class="header-title">
            <img src="images/logo.jfif" height="49px" alt="">
        </span>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <!-- footer menu -->
    <!-- footer menu end -->

    <div class="header-clear-medium">

        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6 pe-0">
                    <a class="card mx-0 mb-3 card-style default-link" data-card-height="410" href="{{ route('menu.hookahs') }}" style="background-image:url({{ asset('/storage/' . $home->left_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->left_block_text ) {{ $home->left_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->left_block_text )
                        <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                </div>
                <div class="col-6">
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="132"href="{{ route('menu.bar') }}" style="background-image:url({{ asset('/storage/' . $home->upper_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->upper_block_text ) {{ $home->upper_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->upper_block_text )
                            <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="131"href="{{ route('menu.services') }}" style="background-image:url({{ asset('/storage/' . $home->central_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->central_block_text ) {{ $home->central_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->central_block_text )
                            <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="132"href="{{ route('menu.takeAway') }}" style="background-image:url({{ asset('/storage/' . $home->lower_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->lower_block_text ) {{ $home->lower_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->lower_block_text )
                            <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                </div>
            </div>
        </div>
        <div data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
</div>

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
