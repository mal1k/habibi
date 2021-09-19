@extends('layout')

@section('returnBack')
true
@endsection

@section('title')
С собой
@endsection

@section('content')
<div class="header-clear-medium">
    <div>

        @if ( isset($delivery->title) || isset($delivery->price) )
            <div data-card-height="150" takeaway_id="{{ $delivery->id }}" data-menu="menu-takeaway-item" class="card card-style shadow-xl rounded-m mt-4" style="background-image: url({{ asset('/storage/' . $delivery->image) }});">
                <div class="card-bottom text-center">
                    <h4 class="color-white font-800 mb-3">{{ $delivery->title . ' ' . $delivery->price }} ₴</h4>
                </div>
                <div class="card-overlay bg-gradient"></div>
            </div>
        @endif

      <div class="card card-style @if ( empty($delivery->title) || empty($delivery->price) ) mt-4 @endif">

        <div class="content mb-0" id="tab-group-1">

            <h1 class="text-center mb-2">С собой</h1>
            <div class="clearfix mb-4"></div>

            @isset ( $takeaway )
                @foreach ($takeaway as $item)
                    <div class="d-flex mb-4" bar_id="{{ $item->id }}" data-menu="menu-bar-item">
                        <div class="align-self-center">
                            <img  src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0" id="price">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                @endforeach
            @endisset

        </div>
      </div>
    <div data-menu-load="menu-footer.html"></div>
</div>
@endsection
