@extends('admin.layout')

@section('menu-num') 3 @endsection
@section('title')
Главная
@endsection

@section('content')

<div class="header-clear-medium">
    <div id="page">

        <form method="POST" enctype="multipart/form-data"
                @if ( isset($home) )
                    action="{{ route('admin.home.update') }}"
                @else
                    action="{{ route('admin.home.store') }}"
                @endif>
                @csrf
                @isset($category)
                    @method('PUT')
                @endisset

        <div class="card card-style mt-3">
            <div class="content mb-0">
                <h1>Левый блок</h1>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" name="left_block_text" class="form-control validate-text" id="form2" placeholder="Кальяны" value="{{ old('left_block_text', isset($home->left_block_text) ? $home->left_block_text : '' ) }}">
                </div>
                <div class="file-data pb-5">
                    <input type="file" class="upload-file bg-highlight shadow-s rounded-s" name="left_block_img" accept=".png, .jpg, .jpeg">
                    <p class="upload-file-text color-white">Выбрать картинку</p>
                </div>
            </div>
        </div>

        <div class="card card-style mt-3">
            <div class="content mb-0">
                <h1>Верхний блок</h1>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" name="upper_block_text" class="form-control validate-text" id="form2" placeholder="Кальяны" value="{{ old('upper_block_text', isset($home->upper_block_text) ? $home->upper_block_text : '' ) }}">
                    <label for="form2" class="color-highlight"></label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                </div>
                <div class="file-data pb-5">
                    <input type="file" id="file-upload" class="upload-file bg-highlight shadow-s rounded-s " name="upper_block_img" accept=".png, .jpg, .jpeg">
                    <p class="upload-file-text color-white">Выбрать картинку</p>
                </div>
            </div>
        </div>

        <div class="card card-style mt-3">
            <div class="content mb-0">
                <h1>Центральный блок</h1>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" name="central_block_text" class="form-control validate-text" id="form2" placeholder="Бар" value="{{ old('central_block_text', isset($home->central_block_text) ? $home->central_block_text : '' ) }}">
                    <label for="form2" class="color-highlight"></label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                </div>
                <div class="file-data pb-5">
                    <input type="file" id="file-upload" class="upload-file bg-highlight shadow-s rounded-s " name="central_block_img" accept=".png, .jpg, .jpeg">
                    <p class="upload-file-text color-white">Выбрать картинку</p>
                </div>
            </div>
        </div>

        <div class="card card-style mt-3">
            <div class="content mb-0">
                <h1>Нижний блок</h1>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" name="lower_block_text" class="form-control validate-text" id="form2" placeholder="Кальяны" value="{{ old('lower_block_text', isset($home->lower_block_text) ? $home->lower_block_text : '' ) }}">
                    <label for="form2" class="color-highlight"></label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                </div>
                <div class="file-data pb-5">
                    <input type="file" id="file-upload" class="upload-file bg-highlight shadow-s rounded-s " name="lower_block_img" accept=".png, .jpg, .jpeg">
                    <p class="upload-file-text color-white">Выбрать картинку</p>
                </div>
            </div>
        </div>

        <div class="content mt-n4 d-grid">
            <button class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s" type="submit">Сохранить</button>
        </div>

        <div class="clearfix mb-5"></div>

    </form>

    </div>
</div>
@endsection
