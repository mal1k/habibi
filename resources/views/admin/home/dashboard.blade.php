@extends('admin.layout')

@section('menu-num') 3 @endsection
@section('title')
Главная
@endsection

@section('content')

<div class="header-clear-medium">
    <div id="page">

        <div class="card card-style mt-3">
            <div class="content mb-0">
            Hi there, {{ Auth::user()->name }}!

            <form method="POST" enctype="multipart/form-data"
                @if ( isset($home) )
                    action="{{ route('admin.home.update') }}"
                @else
                    action="{{ route('admin.home.store') }}"
                @endif
                class="row row-cols-lg-auto g-3 align-items-center">
                @csrf
                @isset($category)
                    @method('PUT')
                @endisset

                left block
                <div class="file-data pb-5">
                    <input type="file" id="file-upload" class="upload-file bg-highlight shadow-s rounded-s " name="left_block_img" accept=".png, .jpg, .jpeg" />
                    <p class="upload-file-text color-white">Левый блок</p>
                </div>
                <input type="text" name="left_block_text" value="{{ old('left_block_text', isset($home->left_block_text) ? $home->left_block_text : '' ) }}">

                <div>
                    upper block
                <input type="file" name="upper_block_img" accept=".png, .jpg, .jpeg" />
                <input type="text" name="upper_block_text" value="{{ old('upper_block_text', isset($home->upper_block_text) ? $home->upper_block_text : '' ) }}">
                </div>
                <br>
                central block
                <input type="file" name="central_block_img" accept=".png, .jpg, .jpeg" />
                <input type="text" name="central_block_text" value="{{ old('central_block_text', isset($home->central_block_text) ? $home->central_block_text : '' ) }}">
                <br>
                lower block
                <input type="file" name="lower_block_img" accept=".png, .jpg, .jpeg" />
                <input type="text" name="lower_block_text" value="{{ old('lower_block_text', isset($home->lower_block_text) ? $home->lower_block_text : '' ) }}">

                <button type="submit">save</button>
            </form>
            </div>
        </div>
    </div>
</div>
        @isset ($home)
        {{ $home }}
        @endisset
@endsection
