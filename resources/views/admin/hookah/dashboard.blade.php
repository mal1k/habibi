<!DOCTYPE HTML>
<html lang="en">
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

<body class="theme-dark" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="page-title page-title-fixed">
        <a href="/" class="page-title-icon shadow-xl bg-theme color-theme me-0 ms-3"><i class="fa fa-arrow-left"></i></a>
        <h1>@isset ( $home->left_block_text ) {{ $home->left_block_text }} @endisset</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>

    </div>
    <div class="page-title-clear"></div>

    <div>
        <div class="card card-style">
            <div class="content mb-0 mt-3" id="tab-group-1">
                <h1 class="text-center mb-2">Табаки</h1>
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                    <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1ab">Легкие</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2ab">Средние</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3ab">Тяжелые</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-4ab">Чаши</a>
                </div>

                <div class="clearfix mb-4"></div>
                <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1ab">
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2">Serbetli</p>
                            <h2 class="font-15 line-height-s mt-1 mb-1">За то дёшево</h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">230 ₴</h2>
                        </div>
                    </div>
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2ab">
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="data:image/png;base64,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" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2">Element</p>
                            <h2 class="font-15 line-height-s mt-1 mb-1">Хорошая штука</h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">280 ₴</h2>
                        </div>
                    </div>
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3ab">
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="https://hookario.com.ua/files/products/7eb530d3-969e-11ea-aa26-3052cbd32594.1800x1200w.jpeg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2">Tangiers</p>
                            <h2 class="font-15 line-height-s mt-1 mb-1">Не сдох и ладно</h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">350 ₴</h2>
                        </div>
                    </div>
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4ab">
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="https://duda.com.ua/storage/images/glunyanaya-ulu-sulukonovaya-chasha/sulukonovaya-chasha-preumuschestva-u-nedostatku-vhd.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <!-- <p class="color-highlight font-11 mb-n2">Силиконовая</p> -->
                            <h2 class="font-15 line-height-s mt-1 mb-1">Силиконовая</h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">123 ₴</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content ends here-->

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
