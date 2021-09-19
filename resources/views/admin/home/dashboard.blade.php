@extends('admin.layout')

@section('menu-num') 3 @endsection
@section('title')
Главная
@endsection

@section('content')

<div class="header-clear-medium">
    <div id="page">

        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6 pe-0">
                    <a class="card mx-0 mb-3 card-style default-link" data-card-height="410" data-menu="menu-item" style="background-image:url({{ asset('/storage/' . $home->left_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->left_block_text ) {{ $home->left_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->left_block_text )
                        <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                </div>
                <div class="col-6">
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="132" data-menu="menu-bar-item" style="background-image:url({{ asset('/storage/' . $home->upper_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->upper_block_text ) {{ $home->upper_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->upper_block_text )
                            <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="131" data-menu="menu-services-item" style="background-image:url({{ asset('/storage/' . $home->central_block_img) }})">
                        <div class="card-bottom">
                            <h3 class="color-white text-center mb-2">@isset ( $home->central_block_text ) {{ $home->central_block_text }} @endisset</h3>
                        </div>
                        @isset ( $home->central_block_text )
                            <div class="card-overlay bg-gradient"></div>
                        @endisset
                    </a>
                    <a class="card mx-0 mb-2 card-style default-link" data-card-height="132" data-menu="menu-takeaway-item" style="background-image:url({{ asset('/storage/' . $home->lower_block_img) }})">
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

        <div class="clearfix mb-5"></div>

    </div>
</div>

<!-- hookahs -->
  <div id="menu-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="290">
    <div class="menu-title">
        <p class="color-highlight" id="takeawayP">Редактирование</p>
        <h1 class="font-22" id="nameOfService">{{ $home->left_block_text }}</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

    <div id="form"></div>

    <form method="POST" id="takeawayForm" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="takeaway_id">

        <div class="row mb-0">
            <div class="file-data pb-5">
                <input type="file" id="takeawayImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="left_block_img" accept=".png, .jpg, .jpeg">
                <p class="upload-file-text color-white">Выбрать картинку</p>
            </div>
            <div class="col">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="left_block_text" class="form-control" id="left_block_text" placeholder="Название" @isset ( $home->left_block_text ) value="{{ $home->left_block_text }}" @endisset>
                    <label for="left_block_text" class="color-highlight">Название</label>
                </div>
            </div>
        </div>
        <button id="saveButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>

    </div>
  </div>

<!-- bar -->
    <div id="menu-bar-item"
    class="menu menu-box-modal rounded-m bg-theme"
    data-menu-width="350"
    data-menu-height="290">
    <div class="menu-title">
    <p class="color-highlight" id="takeawayP">Редактирование</p>
    <h1 class="font-22" id="nameOfService">{{ $home->upper_block_text }}</h1>
    <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

    <div id="form"></div>

    <form method="POST" id="takeawayForm" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
    @csrf

    <input type="hidden" id="takeaway_id">

    <div class="row mb-0">
        <div class="file-data pb-5">
            <input type="file" id="takeawayImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="upper_block_img" accept=".png, .jpg, .jpeg">
            <p class="upload-file-text color-white">Выбрать картинку</p>
        </div>
        <div class="col">
            <div class="input-style has-borders mb-4">
                <input type="text" name="upper_block_text" class="form-control" id="upper_block_text" placeholder="Название" @isset ( $home->upper_block_text ) value="{{ $home->upper_block_text }}" @endisset>
                <label for="upper_block_text" class="color-highlight">Название</label>
            </div>
        </div>
    </div>
    <button id="saveButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>

    </div>
    </div>

<!-- services -->
    <div id="menu-services-item"
    class="menu menu-box-modal rounded-m bg-theme"
    data-menu-width="350"
    data-menu-height="290">
    <div class="menu-title">
    <p class="color-highlight" id="takeawayP">Редактирование</p>
    <h1 class="font-22" id="nameOfService">{{ $home->central_block_text }}</h1>
    <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

    <div id="form"></div>

    <form method="POST" id="takeawayForm" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
    @csrf

    <input type="hidden" id="takeaway_id">

    <div class="row mb-0">
        <div class="file-data pb-5">
            <input type="file" id="takeawayImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="central_block_img" accept=".png, .jpg, .jpeg">
            <p class="upload-file-text color-white">Выбрать картинку</p>
        </div>
        <div class="col">
            <div class="input-style has-borders mb-4">
                <input type="text" name="central_block_text" class="form-control" id="central_block_text" placeholder="Название" @isset ( $home->central_block_text ) value="{{ $home->central_block_text }}" @endisset>
                <label for="central_block_text" class="color-highlight">Название</label>
            </div>
        </div>
    </div>
    <button id="saveButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>

    </div>
    </div>

<!-- takeaway -->
    <div id="menu-takeaway-item"
    class="menu menu-box-modal rounded-m bg-theme"
    data-menu-width="350"
    data-menu-height="290">
    <div class="menu-title">
    <p class="color-highlight" id="takeawayP">Редактирование</p>
    <h1 class="font-22" id="nameOfService">{{ $home->lower_block_text }}</h1>
    <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

    <div id="form"></div>

    <form method="POST" id="takeawayForm" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
    @csrf

    <input type="hidden" id="takeaway_id">

    <div class="row mb-0">
        <div class="file-data pb-5">
            <input type="file" id="takeawayImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="lower_block_img" accept=".png, .jpg, .jpeg">
            <p class="upload-file-text color-white">Выбрать картинку</p>
        </div>
        <div class="col">
            <div class="input-style has-borders mb-4">
                <input type="text" name="lower_block_text" class="form-control" id="lower_block_text" placeholder="Название" @isset ( $home->lower_block_text ) value="{{ $home->lower_block_text }}" @endisset>
                <label for="lower_block_text" class="color-highlight">Название</label>
            </div>
        </div>
    </div>
    <button id="saveButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>

    </div>
    </div>

@endsection
