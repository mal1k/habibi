@extends('layout')

@section('returnBack')
true
@endsection

@section('title')
Бар
@endsection

@section('content')
<div class="header-clear-medium">
    <div>
        <div class="content m-0 row">
            <div class="splide__slide col beer-part-l">
                <div class="card m-2 card-style" beer_id="{{ $beerFirst->id }}" data-menu="menu-beer-item">
                    <img src="{{ asset('/storage/' . $beerFirst->image) }}" class="img-fluid beer-img">
                    <div class="p-2 bg-theme rounded-sm">
                        <div class="d-flex">
                            <div>
                                <h4 class="mb-n1 font-16 line-height-xs pb-2">{{ $beerFirst->title }}</h4>
                            </div>
                            <div class="ms-auto">
                                <h4 class="font-14 line-height-xs">{{ $beerFirst->price }} ₴</h4>
                            </div>
                        </div>
                        <p class="font-10 mb-0"><i class="fa fa-beer color-yellow-dark pe-2" aria-hidden="true"></i>{{ $beerFirst->description }}</p>
                    </div>
                </div>
            </div>
            <div class="splide__slide col beer-part-r">
                <div class="card m-2 card-style" beer_id="{{ $beerSecond->id }}" data-menu="menu-beer-item">
                    <img src="{{ asset('/storage/' . $beerSecond->image) }}" class="img-fluid beer-img">
                    <div class="p-2 bg-theme rounded-sm">
                        <div class="d-flex">
                            <div>
                                <h4 class="mb-n1 font-16 line-height-xs pb-2">{{ $beerSecond->title }}</h4>
                            </div>
                            <div class="ms-auto">
                                <h4 class="font-14 line-height-xs">{{ $beerSecond->price }} ₴</h4>
                            </div>
                        </div>
                        <p class="font-10 mb-0"><i class="fa fa-beer color-yellow-dark pe-2" aria-hidden="true"></i>{{ $beerSecond->description }}</p>
                    </div>
                </div>
            </div>
        </div>

      <div class="card card-style">
        <div class="content mb-0 mt-3" id="tab-group-1">
            <h1 class="text-center mb-2">Бар</h1>
            <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1ab">Безалкогольные</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2ab">Алкогольные</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3ab">Закуски</a>
            </div>

            <div class="clearfix mb-4"></div>
            <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1ab">
            @isset ( $bar )
                @foreach ($bar as $item)
                    @if ( $item->category == 'non_alcoholic' )
                    <div class="d-flex mb-4" bar_id="{{ $item->id }}" data-menu="menu-bar-item">
                        <div class="align-self-center">
                            <img src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h1 class="color-highlight font-13 mb-n2">{{ $item->beer }}</h1>
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0" id="price">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endisset
            </div>
            <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2ab">
            @isset ( $bar )
                @foreach ($bar as $item)
                    @if ( $item->category == 'alcoholic' )
                    <div class="d-flex mb-4" bar_id="{{ $item->id }}" data-menu="menu-bar-item">
                        <div class="align-self-center">
                            <img  src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h1 class="color-highlight font-13 mb-n2">{{ $item->beer }}</h1>
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0" id="price">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endisset
            </div>
            <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3ab">
            @isset ( $bar )
                @foreach ($bar as $item)
                    @if ( $item->category == 'snacks' )
                    <div class="d-flex mb-4" bar_id="{{ $item->id }}" data-menu="menu-bar-item">
                        <div class="align-self-center">
                            <img src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h1 class="color-highlight font-13 mb-n2">{{ $item->beer }}</h1>
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0" id="price">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endisset
            </div>
        </div>
      </div>
    <div data-menu-load="menu-footer.html"></div>
</div>
@endsection
