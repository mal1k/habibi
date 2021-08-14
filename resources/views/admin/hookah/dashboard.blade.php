@extends('admin.layout')

@section('menu-num') 1 @endsection
@section('title') Кальяны @endsection

@section('buttons')
<a href="#" id="addNewItem" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-plus color-red-dark"></i></a>
@endsection

@section('content')
<div class="header-clear-medium">
<div id="page">
    <div class="card card-style mt-3">
        <div class="content mb-0 mt-3" id="tobacco">
            <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tobaccoList" data-target-id=1>Кальяны</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#brandList" data-target-id=2>Табаки</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#bowlsList" data-target-id=3>Чаши</a>
            </div>

            <div class="clearfix mb-4"></div>
            <div data-bs-parent="#tobacco" class="collapse show" id="tobaccoList">
                <div class="card card-style">
                    <div class="content mb-0" id="tab-group-1">
                        <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                            <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1ab">Легкие</a>
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2ab">Средние</a>
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3ab">Тяжелые</a>
                        </div>

                        <div class="clearfix mb-4"></div>
                        <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1ab">
                            @isset ( $hookahs )
                              @foreach ($hookahs as $hookah)
                                @if ( $hookah->strength == 1 )
                                <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                                    <div class="align-self-center">
                                        <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                                    </div>
                                    <div class="align-self-center">
                                        <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                        <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                                    </div>
                                    <div class="ms-auto ps-5 align-self-center text-center">
                                        <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                        <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
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
                                <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                                    <div class="align-self-center">
                                        <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                                    </div>
                                    <div class="align-self-center">
                                        <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                        <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                                    </div>
                                    <div class="ms-auto ps-5 align-self-center text-center">
                                        <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                        <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
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
                                <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                                    <div class="align-self-center">
                                        <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                                    </div>
                                    <div class="align-self-center">
                                        <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                        <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                                    </div>
                                    <div class="ms-auto ps-5 align-self-center text-center">
                                        <!-- <p class="color-highlight font-10 mb-n2">за шт.</p> -->
                                        <h2 class="font-15 mb-0" id="price_">{{ $hookah->price }} ₴</h2>
                                    </div>
                                </div>
                                @endif
                              @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <div data-bs-parent="#tobacco" class="collapse" id="brandList">
                2
            </div>
            <div data-bs-parent="#tobacco" class="collapse" id="bowlsList">
                3
            </div>
        </div>
    </div>
</div>
</div>

<div id="menu-cart-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="310">
    <div class="menu-title">
        <p class="color-highlight" id="tobaccoProduct">Редактирование</p>
        <h1 class="font-22" id="nameOfProduct">[[ НАЗВАНИЕ ТАБАКА ]]</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content">

        <div id="form"></div>

    <form method="POST" id="hookahForm" enctype="multipart/form-data">
        @csrf

        <div class="row mb-0">
            <div class="col-12">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Название табака">
                    <label for="titleInput" class="color-highlight">Название табака</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders no-icon mb-4">
                    <label for="tobaccoInput" class="color-highlight">Бренд</label>
                    <select id="tobaccoInput" name="tobacco">
                        <option disabled selected>Бренд</option>
                        <option value="Nual">Nual</option>
                        <option value="a">Serbetli</option>
                        <option value="b">Element</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders no-icon mb-4">
                    <label for="strengthInput" class="color-highlight">Крепость</label>
                    <select id="strengthInput" name="strength">
                        <option disabled selected>Крепость</option>
                        <option value="1">Легкий</option>
                        <option value="2">Средний</option>
                        <option value="3">Тяжелый</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders mb-4">
                    <input type="number" name="price" class="form-control" id="priceInput" placeholder="Цена">
                    <label for="priceInput" class="color-highlight">Цена</label>
                </div>
            </div>
        </div>
        <input type="hidden" name="hookah_id" id="hookah_id">
        <button id="saveItemButton" onclick="return false" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
        <a href="#" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s">Удалить</a>
    </form>
    </div>
</div>
<!-- Page content ends here-->

<script>
jQuery(document).ready(function() {
    $('#addNewItem').click(function(){
        var category = $('[data-bs-target="#tobaccoList"].bg-highlight.no-click').attr("data-target-id");

        switch(category) {
        case '1':
            alert(category)
            break;

        case '2':
            alert(category)
            break;

        case '3':
            alert(category)
            break;
        }
    })

    $('#saveItemButton').click(function(){
        var id = $(this).attr('itemID');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.hookah.update") }}',
            data: $('#hookahForm').serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });

    });

    $('[data-menu="menu-cart-item"').click(function(){
        $('.menu-hider.menu-active').hide();
        $('#menu-cart-item').hide();
        var id = $(this).attr('hookah_id');

        $("#saveItemButton").attr('itemID', id)

        $.ajax({
            type:'POST',
            url:'{{ route("admin.hookah.get") }}',
            data:{id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $("#titleInput").val(data.title);
                $("#hookah_id").val(data.id);
                $('#tobaccoInput').val(data.tobacco);
                $('#strengthInput').val(data.strength);
                $('#priceInput').val(data.price);
                $('#nameOfProduct').text(data.title);
                $('#tobaccoProduct').text(data.tobacco);
                $('.menu-hider.menu-active').show();
                $('#menu-cart-item').show();
            }
        });
    })
})
</script>

@endsection
