@extends('layout')

@section('returnBack')
true
@endsection

@section('title')
{{ $home->central_block_text ?? '' }}
@endsection

@section('content')
<div class="header-clear-medium">
    <div>
      <div class="card card-style mt-3">
        <div class="content mb-0 mt-3" id="tab-group-1">
            <h1 class="text-center mb-2">{{ $home->central_block_text ?? '' }}</h1>
            <div class="clearfix mb-4"></div>

            @isset ( $services )
                @foreach ($services as $item)
                    <div class="d-flex mb-4" bar_id="{{ $item->id }}" data-menu="menu-bar-item">
                        <div class="align-self-center">
                            <img  src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0 max-content" id="price">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                @endforeach
            @endisset

        </div>
      </div>
    <div data-menu-load="menu-footer.html"></div>
</div>
@endsection
