@extends('admin.layout')

@section('menu-num') 5 @endsection
@section('title') С собой @endsection

@section('buttons')
<a href="#" id="addNewItem" class="page-title-icon shadow-xl bg-theme color-theme"><i class="fa fa-plus color-red-dark"></i></a>
@endsection

@section('content')
<div data-menu="menu-takeaway-item"></div>

<div class="header-clear-medium">

    <div data-card-height="150" takeaway_id="{{ $delivery->id }}" data-menu="menu-takeaway-item" class="card card-style shadow-xl rounded-m mt-4" style="background-image: url({{ asset('/storage/' . $delivery->image) }});">
        <div class="card-bottom text-center">
            <h4 class="color-white font-800 mb-3">{{ $delivery->title . ' ' . $delivery->price }} ₴</h4>
        </div>
        <div class="card-overlay bg-gradient"></div>
    </div>

    <div class="card card-style">
      <div class="content mb-0" id="tab-group-1">
          <h1 class="text-center mb-2">С собой</h1>
          <div class="clearfix mb-4"></div>
          @isset ( $takeaway )
            @foreach ($takeaway as $item)
                <div class="d-flex mb-4" takeaway_id="{{ $item->id }}" data-menu="menu-takeaway-item">
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
            @endforeach
          @endisset
      </div>
    </div>
</div>

<!-- takeaway -->
<div id="menu-takeaway-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="290">
    <div class="menu-title">
        <p class="color-highlight" id="takeawayP">Редактирование</p>
        <h1 class="font-22" id="nameOfService">[[ НАЗВАНИЕ ]]</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content mt-0">

        <div id="form"></div>

    <form method="POST" id="takeawayForm" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="takeaway_id">

        <div class="row mb-0">
            <div class="file-data pb-5">
                <input type="file" id="takeawayImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="image" accept=".png, .jpg, .jpeg">
                <p class="upload-file-text color-white">Выбрать картинку</p>
            </div>
            <div class="col-8">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="title" class="form-control" id="titleBarInput" placeholder="Название товара">
                    <label for="titleInput" class="color-highlight">Название товара</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders mb-4">
                    <input type="number" name="price" class="form-control" id="priceBarInput" placeholder="Цена">
                    <label for="priceInput" class="color-highlight">Цена</label>
                </div>
            </div>
        </div>
        <button id="createBarButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Создать</button>
        <button id="saveBarButton" type="submit" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>
    <form method="POST" id="takeawayDeleteForm">
        @csrf
        <button id="deleteBarButton" type="submit" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s w-100">Удалить</button>
    </form>
    </div>
</div>

<script>
jQuery(document).ready(function() {
  // add new item button clicked
    $('#addNewItem').click(function(){
        $('#takeawayP').text('Новая');
        $('#nameOfService').text('Услуга');
        $('[data-menu="menu-takeaway-item"]')[0].click();
        $("#createBarButton").show();
        $('#saveBarButton').hide();
        $('#deleteBarButton').hide();
        $('#takeawayForm').attr('action', '/admin/takeaway/store');
    })

  // click on created beer
    $('[data-menu="menu-beer-item"').click(function(){
        $('#saveBeerButton').show();
        $('#deleteBeerButton').show();
        $('.menu-hider.menu-active').hide();
        $('#menu-beer-item').hide();
        var id = $(this).attr('beer_id');
        $('#beerForm').attr('action', '/admin/takeaway/update/'+id+'');

        $.ajax({
            type:'POST',
            url:'{{ route("admin.takeaway.get") }}',
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

  // click on created takeaway
    $('[data-menu="menu-takeaway-item"').click(function(){
            $("#createBarButton").hide();
            $('#saveBarButton').show();
            $('#deleteBarButton').show();
            $('.menu-hider.menu-active').hide();
            $('#menu-takeaway-item').hide();
            var id = $(this).attr('takeaway_id');
            $('#takeawayForm').attr('action', '/admin/takeaway/update/'+id+'');
            $('#takeawayDeleteForm').attr('action', '/admin/takeaway/destroy/'+id+'');

            $.ajax({
                type:'POST',
                url:'{{ route("admin.takeaway.get") }}',
                data:{id:id},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){

                    $('#nameOfService').text(data.title);

                    if ( data.category == 'non_alcoholic' )
                        $('#takeawayP').text('Безалкогольные');
                    else if ( data.category == 'alcoholic' )
                        $('#takeawayP').text('Алкогольные');
                    else if ( data.category == 'snacks' )
                        $('#takeawayP').text('Закуски');

                    $('#titleBarInput').val(data.title);
                    $('#priceBarInput').val(data.price);
                    $('.menu-hider.menu-active').show();
                    $('#menu-takeaway-item').show();
                    $("#takeaway_id").attr('name', 'takeaway_id');
                    $("#takeaway_id").val(data.id);
                    $("#category").val(data.category);

                    if ( {{ $delivery->id }} == data.id )
                        $('#takeawayDeleteForm').hide();
                    else
                        $('#takeawayDeleteForm').show();
                }
            });
        })

})
</script>

@endsection
