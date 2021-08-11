<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Habibi</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/css/fontawesome-all.min.css') }}">
<link rel="manifest" href="{{ URL::asset('_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('app/icons/icon-192x192.png') }}">
<link rel="stylesheet" class="page-highlight" type="text/css" href="{{ URL::asset('styles/highlights/highlight_red.css') }}">
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>

<body class="detect-theme" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="page-title page-title-fixed">
        <a href="{{ route('admin.index') }}" class="page-title-icon shadow-xl bg-theme color-theme me-0 ms-3"><i class="fa fa-arrow-left"></i></a>
        <h1>@isset ( $home->left_block_text ) {{ $home->left_block_text }} @endisset</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light"><i class="fa fa-plus color-red-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark"><i class="fa fa-plus color-red-dark"></i></a>

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
                    @isset ( $hookahs )
                      @foreach ($hookahs as $hookah)
                        @if ( $hookah->strength == 1 )
                        <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                            <div class="align-self-center">
                                <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto ps-5 align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
                            </div>
                        </div>
                        @endif
                      @endforeach
                    @endisset
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2ab">
                    @isset ( $hookahs )
                      @foreach ($hookahs as $hookah)
                        @if ( $hookah->strength == 2 )
                        <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                            <div class="align-self-center">
                                <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto ps-5 align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
                            </div>
                        </div>
                        @endif
                      @endforeach
                    @endisset
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3ab">
                    @isset ( $hookahs )
                      @foreach ($hookahs as $hookah)
                        @if ( $hookah->strength == 3 )
                        <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                            <div class="align-self-center">
                                <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto ps-5 align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
                            </div>
                        </div>
                        @endif
                      @endforeach
                    @endisset
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4ab">
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h1 class="color-highlight font-13 mb-n2">Serbetli</h1>
                            <h2 class="font-15 line-height-s mt-1 mb-1">За то дёшево</h2>
                        </div>
                        <div class="ms-auto ps-5 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">230 ₴</h2>
                        </div>
                        <div class="ms-auto ps-5 align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0">Легкий</h2>
                        </div>

                        <div class="ms-auto align-self-center text-center">
                          <a href="#">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0"><i class="fas fa-pen"></i></h2>
                          </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('[data-menu="menu-cart-item"').click(function(){
            $('.menu-hider.menu-active').hide();
            $('#menu-cart-item').hide();
            var id = $(this).attr('hookah_id');

            $.ajax({
                type:'POST',
                url:'{{ route("admin.hookah.get") }}',
                data:{id:id},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $("#titleInput").val(data.title);
                    $('#tobaccoInput').val(data.tobacco);
                    $('#strengthInput').val(data.strength);
                    $('#priceInput').val(data.price);
                    $('.menu-hider .menu-active').show();
                    $('#menu-cart-item').show();
                }
            });
        })
    })
    </script>



    <div id="menu-cart-item"
            class="menu menu-box-modal rounded-m bg-theme"
            data-menu-width="350"
            data-menu-height="310">
        <div class="menu-title">
            <p class="color-highlight">Редактирование </p>
            <h1 class="font-22" id="nameOfProduct">[[ НАЗВАНИЕ ТАБАКА ]]</h1>
            <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
        </div>

        <div class="content">
            {{--  <div class="divider mt-n2"></div>  --}}

            <div class="row mb-0">
                <div class="col-12">
                    <div class="input-style has-borders mb-4">
                        <input type="text" class="form-control" id="titleInput" placeholder="Название табака">
                        <label for="titleInput" class="color-highlight">Название табака</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="tobaccoInput" class="color-highlight">Бренд</label>
                        <select id="tobaccoInput">
                            <option disabled selected>Бренд</option>
                            <option value="z">Nual</option>
                            <option value="a">Serbetli</option>
                            <option value="b">Element</option>
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="strengthInput" class="color-highlight">Крепость</label>
                        <select id="strengthInput">
                            <option disabled selected>Крепость</option>
                            <option value="z">Легкий</option>
                            <option value="a">Средний</option>
                            <option value="b">Тяжелый</option>
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-style has-borders mb-4">
                        <input type="number" class="form-control" id="priceInput" placeholder="Цена">
                        <label for="priceInput" class="color-highlight">Цена</label>
                    </div>
                </div>
            </div>
            <a href="#" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s">Сохранить</a>
            <a href="#" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s">Удалить</a>
        </div>
    </div>
    <!-- Page content ends here-->

<script type="text/javascript" src="{{ URL::asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/custom.js') }}"></script>
</body>
