@extends('admin.layout')

@section('menu-num') 3 @endsection
@section('title')
Главная
@endsection

@section('content')
<div class="header-clear-medium">
<div id="page">
    <div class="content mb-0 mt-3">
        <div class="row mb-0">
            <div class="col-6 pe-0">
                <a class="card mx-0 mb-3 card-style default-link" data-card-height="410" href="{{ route('admin.hookah.index') }}" style="background-image:url({{ asset('/storage/' . $home->left_block_img) }})">
                    <div class="card-bottom">
                        <h3 class="color-white text-center mb-2">@isset ( $home->left_block_text ) {{ $home->left_block_text }} @endisset</h3>
                    </div>
                    @isset ( $home->left_block_text )
                    <div class="card-overlay bg-gradient"></div>
                    @endisset
                </a>
            </div>
            <div class="col-6">
                <a class="card mx-0 mb-2 card-style default-link" data-card-height="132"href="#" style="background-image:url({{ asset('/storage/' . $home->upper_block_img) }})">
                    <div class="card-bottom">
                        <h3 class="color-white text-center mb-2">@isset ( $home->upper_block_text ) {{ $home->upper_block_text }} @endisset</h3>
                    </div>
                    @isset ( $home->upper_block_text )
                        <div class="card-overlay bg-gradient"></div>
                    @endisset
                </a>
                <a class="card mx-0 mb-2 card-style default-link" data-card-height="131"href="#" style="background-image:url({{ asset('/storage/' . $home->central_block_img) }})">
                    <div class="card-bottom">
                        <h3 class="color-white text-center mb-2">@isset ( $home->central_block_text ) {{ $home->central_block_text }} @endisset</h3>
                    </div>
                    @isset ( $home->central_block_text )
                        <div class="card-overlay bg-gradient"></div>
                    @endisset
                </a>
                <a class="card mx-0 mb-2 card-style default-link" data-card-height="132"href="#" style="background-image:url({{ asset('/storage/' . $home->lower_block_img) }})">
                    <div class="card-bottom">
                        <h3 class="color-white text-center mb-2">@isset ( $home->lower_block_text ) {{ $home->lower_block_text }} @endisset</h3>
                    </div>
                    @isset ( $home->lower_block_text )
                        <div class="card-overlay bg-gradient"></div>
                    @endisset
                </a>
            </div>
            <div class="col-12">
                <a class="card mx-0 mb-2 card-style default-link" data-card-height="132"href="{{ route('menu.bar') }}" style="background-image:url({{ asset('/storage/' . $home->upper_block_img) }})">
                    <div class="card-bottom">
                        <h3 class="color-white text-center mb-2">Главная</h3>
                    </div>
                        <div class="card-overlay bg-gradient"></div>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- Page content ends here-->
@endsection
