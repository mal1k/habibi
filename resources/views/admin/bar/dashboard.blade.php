@extends('admin.layout')

@section('menu-num') 2 @endsection
@section('title') Бар @endsection

@section('buttons')
<a href="#" id="addNewItem" class="page-title-icon shadow-xl bg-theme color-theme"><i class="fa fa-plus color-red-dark"></i></a>
@endsection

@section('content')
<div data-menu="menu-bar-item"></div>

<div class="header-clear-medium">
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
                        <h2 class="font-15 mb-0 max-content" id="price">{{ $item->price }} ₴</h2>
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
                        <h2 class="font-15 mb-0 max-content" id="price">{{ $item->price }} ₴</h2>
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
                        <h2 class="font-15 mb-0 max-content" id="price">{{ $item->price }} ₴</h2>
                    </div>
                </div>
                @endif
            @endforeach
          @endisset
          </div>
      </div>
    </div>
</div>

<!-- beer -->
<div id="menu-beer-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="340">
    <div class="menu-title">
        <p class="color-highlight" id="beerP">Пиво</p>
        <h1 class="font-22" id="nameOfProduct">[[ НАЗВАНИЕ ПИВА ]]</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

        <div id="form"></div>

    <form method="POST" id="beerForm" enctype="multipart/form-data">
        @csrf

    <div class="row">
        <div id="uploadBeerImage" class="file-data pb-3 col-12">
            <input type="file" id="barImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="image" accept=".png, .jpg, .jpeg">
            <p class="upload-file-text color-white">Выбрать картинку</p>
        </div>
    </div>

        <div class="row mb-0">
            <div class="col-8">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Название пива">
                    <label for="titleInput" class="color-highlight">Название пива</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders mb-4">
                    <input type="number" name="price" class="form-control" id="priceInput" placeholder="Цена">
                    <label for="priceInput" class="color-highlight">Цена</label>
                </div>
            </div>
            <div class="col-12">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Описание">
                    <label for="descriptionInput" class="color-highlight">Описание</label>
                </div>
            </div>
        </div>
        <input type="hidden" id="beer_id">
        <button id="saveBeerButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 rounded-s w-100">Сохранить</button>
    </form>
    </div>
</div>

<!-- bar -->
<div id="menu-bar-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="360">
    <div class="menu-title">
        <p class="color-highlight" id="barP">Редактирование</p>
        <h1 class="font-22" id="nameOfBar">[[ НАЗВАНИЕ ]]</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

        <div id="form"></div>

    <form method="POST" id="barForm" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="bar_id">

        <div class="row mb-0">
            <div class="file-data pb-5">
                <input type="file" id="barImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="image" accept=".png, .jpg, .jpeg">
                <p class="upload-file-text color-white">Выбрать картинку</p>
            </div>
            <div class="col-12">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="title" class="form-control" id="titleBarInput" placeholder="Название товара" required>
                    <label for="titleInput" class="color-highlight">Название товара</label>
                </div>
            </div>
            <div class="col-8">
                <div class="input-style has-borders no-icon mb-4 input-style-active">
                    <label for="category" class="color-highlight">Категория</label>
                    <select id="category" name="category">
                        <option disabled="" selected="">Категория</option>
                        <option value="non_alcoholic">Безалкогольные</option>
                        <option value="alcoholic">Алкогольные</option>
                        <option value="snacks">Закуски</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders mb-4">
                    <input type="number" name="price" class="form-control" id="priceBarInput" placeholder="Цена" required>
                    <label for="priceInput" class="color-highlight">Цена</label>
                </div>
            </div>
        </div>
        <button id="createBarButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Создать</button>
        <button id="saveBarButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>
    <form method="POST" id="barDeleteForm">
        @csrf
        <button id="deleteBarButton" type="submit" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s w-100">Удалить</button>
    </form>
    </div>
</div>

<script>
jQuery(document).ready(function() {
  // add new item button clicked
    $('#addNewItem').click(function(){
        $('#barP').text('Новый');
        $('#nameOfBar').text('Бар');
        $('[data-menu="menu-bar-item"]')[0].click();
        $("#createBarButton").show();
        $('#saveBarButton').hide();
        $('#deleteBarButton').hide();
        $('#barForm').attr('action', '/admin/bar/store');
    })

  // click on created beer
    $('[data-menu="menu-beer-item"').click(function(){
        $('#saveBeerButton').show();
        $('#deleteBeerButton').show();
        $('.menu-hider.menu-active').hide();
        $('#menu-beer-item').hide();
        var id = $(this).attr('beer_id');
        $('#beerForm').attr('action', '/admin/bar/update/'+id+'');

        $.ajax({
            type:'POST',
            url:'{{ route("admin.bar.get") }}',
            data:{id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $("#titleInput").val(data.title);
                $("#beer_id").attr('name', 'beer_id');
                $("#beer_id").val(data.id);
                $('#beerInput').val(data.beer);
                $('#priceInput').val(data.price);
                $('#descriptionInput').val(data.description);
                $('#nameOfProduct').text(data.title);
                $('#beerProduct').text(data.beer);
                $('.menu-hider.menu-active').show();
                $('#menu-beer-item').show();
            }
        });
    })

  // click on created bar
    $('[data-menu="menu-bar-item"').click(function(){
            $("#createBarButton").hide();
            $('#saveBarButton').show();
            $('#deleteBarButton').show();
            $('.menu-hider.menu-active').hide();
            $('#menu-bar-item').hide();
            var id = $(this).attr('bar_id');
            $('#barForm').attr('action', '/admin/bar/update/'+id+'');
            $('#barDeleteForm').attr('action', '/admin/bar/destroy/'+id+'');

            $.ajax({
                type:'POST',
                url:'{{ route("admin.bar.get") }}',
                data:{id:id},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){

                    $('#nameOfBar').text(data.title);

                    if ( data.category == 'non_alcoholic' )
                        $('#barP').text('Безалкогольные');
                    else if ( data.category == 'alcoholic' )
                        $('#barP').text('Алкогольные');
                    else if ( data.category == 'snacks' )
                        $('#barP').text('Закуски');

                    $('#titleBarInput').val(data.title);
                    $('#priceBarInput').val(data.price);
                    $('.menu-hider.menu-active').show();
                    $('#menu-bar-item').show();
                    $("#bar_id").attr('name', 'bar_id');
                    $("#bar_id").val(data.id);
                    $("#category").val(data.category);
                }
            });
        })

})
</script>

@endsection
