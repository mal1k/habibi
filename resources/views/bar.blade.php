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
      <div class="content m-0 row" id="tab-group-1">
        <div class="splide__slide col beer-part-l">
            <div class="card m-2 card-style">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShM6s307Er3ja0B2jF4YH8DgAwvHoJVzG-d2abB6iSFggQgqDaPxNgL_KRMaG2Q5Pe8jo&usqp=CAU" class="img-fluid beer-img">
                <div class="p-2 bg-theme rounded-sm">
                    <div class="d-flex">
                        <div>
                            <h4 class="mb-n1 font-16 line-height-xs pb-2">APA</h4>
                        </div>
                        <div class="ms-auto">
                            <h4 class="font-14 line-height-xs">50 ₴</h4>
                        </div>
                    </div>
                    <p class="font-10 mb-0"><i class="fa fa-beer color-yellow-dark pe-2" aria-hidden="true"></i>С горчинкой</p>
                </div>
            </div>
        </div>
        <div class="splide__slide col beer-part-r">
            <div class="card m-2 card-style">
                <img src="https://www.papercards.com/images/designer-greetings/cd11622-beer-glass-with-heart-suds-son-valentines-day-card.jpg" class="img-fluid beer-img">
                <div class="p-2 bg-theme rounded-sm">
                    <div class="d-flex">
                        <div>
                            <h4 class="mb-n1 font-16 line-height-xs pb-2">Pilsner</h4>
                        </div>
                        <div class="ms-auto">
                            <h4 class="font-14 line-height-xs">50 ₴</h4>
                        </div>
                    </div>
                    <p class="font-10 mb-0"><i class="fa fa-beer color-yellow-dark pe-2" aria-hidden="true"></i>Стандартное</p>
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
        </div>
      </div>
    <div data-menu-load="menu-footer.html"></div>
</div>
@endsection
