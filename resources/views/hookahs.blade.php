@extends('layout')

@section('returnBack')
true
@endsection

@section('title')
Кальяны
@endsection

@section('content')
<div class="header-clear-medium">

    <div>

        <div class="card card-style mt-4">
            <div class="content mb-0">
                <h1 class="text-center font-28 mb-4">Кальянные миксы</h1>
                <div class="chart-container mb-4" style="width:100%;">
                    <canvas class="chart" id="horizontal-chart"/>
                </div>
            </div>
        </div>

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
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <img
                                @if ( isset($hookah->image) )
                                    src="{{ asset('/storage/' . $hookah->image) }}"
                                @else
                                    @foreach ( $tobacco as $item )
                                        @if ( $item->title == $hookah->tobacco )
                                            src="{{ asset('/storage/' . $item->image) }}"
                                        @endif
                                    @endforeach
                                @endif
                                class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">
                                    @if ( isset($hookah->price) )
                                        {{ $hookah->price }}
                                    @else
                                        @foreach ( $tobacco as $item )
                                            @if ( $item->title == $hookah->tobacco )
                                                {{ $item->price }}
                                            @endif
                                        @endforeach
                                    @endif ₴</h2>
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
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <img
                                @if ( isset($hookah->image) )
                                    src="{{ asset('/storage/' . $hookah->image) }}"
                                @else
                                    @foreach ( $tobacco as $item )
                                        @if ( $item->title == $hookah->tobacco )
                                            src="{{ asset('/storage/' . $item->image) }}"
                                        @endif
                                    @endforeach
                                @endif
                                class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">
                                    @if ( isset($hookah->price) )
                                        {{ $hookah->price }}
                                    @else
                                        @foreach ( $tobacco as $item )
                                            @if ( $item->title == $hookah->tobacco )
                                                {{ $item->price }}
                                            @endif
                                        @endforeach
                                    @endif ₴</h2>
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
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <img
                                @if ( isset($hookah->image) )
                                    src="{{ asset('/storage/' . $hookah->image) }}"
                                @else
                                    @foreach ( $tobacco as $item )
                                        @if ( $item->title == $hookah->tobacco )
                                            src="{{ asset('/storage/' . $item->image) }}"
                                        @endif
                                    @endforeach
                                @endif
                                class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                            </div>
                            <div class="align-self-center">
                                <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                            </div>
                            <div class="ms-auto align-self-center text-center">
                                <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                <h2 class="font-15 mb-0" id="price_">
                                    @if ( isset($hookah->price) )
                                        {{ $hookah->price }}
                                    @else
                                        @foreach ( $tobacco as $item )
                                            @if ( $item->title == $hookah->tobacco )
                                                {{ $item->price }}
                                            @endif
                                        @endforeach
                                    @endif ₴</h2>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    @endisset
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4ab">
                @isset ( $bowls )
                    @foreach ($bowls as $item)
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="{{ asset('/storage/' . $item->image) }}" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h2 class="font-15 line-height-s mt-1 mb-1">{{ $item->title }}</h2>
                        </div>
                        <div class="ms-auto align-self-center text-center">
                            <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                            <h2 class="font-15 mb-0" id="price_">{{ $item->price }} ₴</h2>
                        </div>
                    </div>
                    @endforeach
                @endisset
                </div>
            </div>
        </div>
        <div data-menu-load="menu-footer.html"></div>
    </div>
</div>
@endsection
