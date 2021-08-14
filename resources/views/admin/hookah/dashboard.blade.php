@extends('admin.layout')

@section('menu-num') 1 @endsection
@section('title') Кальяны @endsection

@section('buttons')
<a href="#" id="addNewItem" class="page-title-icon shadow-xl bg-theme color-theme"><i class="fa fa-plus color-red-dark"></i></a>
@endsection

@section('content')
<div data-menu="menu-cart-item"></div>
<div data-menu="menu-tobacco-item"></div>

<div class="header-clear-medium">
<div id="page">
    <div class="card card-style mt-3">
        <div class="content mb-0 mt-3" id="tobacco">
            <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active data-bs-toggle="collapse" choose-category="cat" data-bs-target="#tobaccoList" data-target-id=1>Табаки</a>
                <a href="#" data-bs-toggle="collapse" choose-category="cat" data-bs-target="#brandList" data-target-id=2>Бренды</a>
                <a href="#" data-bs-toggle="collapse" choose-category="cat" data-bs-target="#bowlsList" data-target-id=3>Чаши</a>
            </div>

            <div class="clearfix mb-4"></div>
            <div data-bs-parent="#tobacco" class="collapse show" id="tobaccoList">
                <div class="card mt-n3">
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
                                <div class="d-flex mb-4" hookah_id="{{ $hookah->id }}" data-menu="menu-cart-item">
                                    <div class="align-self-center">
                                        <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                                    </div>
                                    <div class="align-self-center">
                                        <h1 class="color-highlight font-13 mb-n2">{{ $hookah->tobacco }}</h1>
                                        <h2 class="font-15 line-height-s mt-1 mb-1">{{ $hookah->title }}</h2>
                                    </div>
                                    <div class="ms-auto align-self-center text-center">
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
                                    <div class="ms-auto align-self-center text-center">
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
                @isset ( $tobacco )
                    @foreach ($tobacco as $item)
                    <div class="d-flex mb-4" tobacco_id="{{ $item->id }}" data-menu="menu-tobacco-item">
                        <div class="align-self-center">
                            <img src="https://kalyan.perm.ru/wp-content/uploads/2020/06/Serbetli.jpg" class="rounded-sm me-3" width="64" height="64" style="object-fit: cover;">
                        </div>
                        <div class="align-self-center">
                            <h1 class="color-highlight font-13 mb-n2">{{ $item->tobacco }}</h1>
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
            <div data-bs-parent="#tobacco" class="collapse" id="bowlsList">
                3
            </div>
        </div>
    </div>
</div>
</div>

<!-- hookah -->
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
                    @isset($tobacco)
                        @foreach ( $tobacco as $item )
                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                        @endforeach
                    @endisset
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
        <input type="hidden" id="hookah_id">
        <button id="createTobaccoButton" onclick="return false" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Создать</button>
        <button id="saveTobaccoButton" onclick="return false" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>
    <form method="POST" id="hookahDeleteForm">
        @csrf
        @method('DELETE')
        <button id="deleteTobaccoButton" onclick="return false" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s w-100">Удалить</button>
    </form>
    </div>
</div>

<!-- tobacco -->
<div id="menu-tobacco-item"
        class="menu menu-box-modal rounded-m bg-theme"
        data-menu-width="350"
        data-menu-height="310">
    <div class="menu-title">
        <p class="color-highlight" id="tobaccoP">Редактирование</p>
        <h1 class="font-22" id="nameOfBrand">[[ НАЗВАНИЕ БРЕНДА ]]</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>

    <div class="content">

        <div id="form"></div>

    <form method="POST" id="brandForm" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="tobacco_id">

        <div class="row mb-0">
            <div class="file-data pb-5">
                <input type="file" id="brandImageUpload" class="upload-file bg-highlight shadow-s rounded-s" name="image" accept=".png, .jpg, .jpeg">
                <p class="upload-file-text color-white">Выбрать картинку</p>
            </div>
            <div class="col-8">
                <div class="input-style has-borders mb-4">
                    <input type="text" name="title" class="form-control" id="titleBrandInput" placeholder="Название бренда" required>
                    <label for="titleInput" class="color-highlight">Название бренда</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-style has-borders mb-4">
                    <input type="number" name="price" class="form-control" id="priceBrandInput" placeholder="Цена" required>
                    <label for="priceInput" class="color-highlight">Цена</label>
                </div>
            </div>
        </div>
        <button id="createBrandButton" onclick="return false" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Создать</button>
        <button id="saveBrandButton" onclick="return false" class="close-menu btn btn-full gradient-blue font-13 btn-m font-600 mt-3 rounded-s w-100">Сохранить</button>
    </form>
    <form method="POST" id="brandDeleteForm">
        @csrf
        @method('DELETE')
        <button id="deleteBrandButton" onclick="return false" class="close-menu btn btn-full gradient-red font-13 btn-m font-600 mt-4 mb-2 rounded-s w-100">Удалить</button>
    </form>
    </div>
</div>


<script>
jQuery(document).ready(function() {
  // save hookah
    $('#saveTobaccoButton').click(function(){
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

  // when clicked on created hookah
    $('[data-menu="menu-cart-item"').click(function(){
        $("#createTobaccoButton").hide();
        $('#saveTobaccoButton').show();
        $('#deleteTobaccoButton').show();
        $('.menu-hider.menu-active').hide();
        $('#menu-cart-item').hide();
        var id = $(this).attr('hookah_id');

        $("#saveTobaccoButton").attr('itemID', id)
        $("#deleteTobaccoButton").attr('delete_hookah_id', id)

        $.ajax({
            type:'POST',
            url:'{{ route("admin.hookah.get") }}',
            data:{id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $("#titleInput").val(data.title);
                $("#hookah_id").attr('name', 'hookah_id');
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

  // create hookah
    $('#createTobaccoButton').click(function(){
        var id = $(this).attr('itemID');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.hookah.store") }}',
            data: $('#hookahForm').serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });
    });

  // delete hookah
    $('#deleteTobaccoButton').click(function(){
        var id = $(this).attr('delete_hookah_id');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.hookah.destroy") }}',
            data: {id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });
    });

  // add new item button clicked
    $('#addNewItem').click(function(){
        // find chosen category
        var category = $('[choose-category="cat"].bg-highlight.no-click').attr("data-target-id");

        switch(category) {
        case '1':
            $('[data-menu="menu-cart-item"]')[0].click();
            $('#tobaccoProduct').text('Новый');
            $('#nameOfProduct').text('Табак');
            $('#createTobaccoButton').show();
            $('#saveTobaccoButton').hide();
            $('#deleteTobaccoButton').hide();
            break;

        case '2':
            $('[data-menu="menu-tobacco-item"]')[0].click();
            $('#tobaccoP').text('Новый');
            $('#nameOfBrand').text('Бренд');
            $('#createBrandButton').show();
            $('#saveBrandButton').hide();
            $('#deleteBrandButton').hide();
            break;

        case '3':
            alert(category)
            break;
        }
    })

  // save tobacco
    $('#saveBrandButton').click(function(){
        var id = $(this).attr('itemID');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.tobacco.update") }}',
            data: $('#brandForm').serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });
    });

  // when clicked on created tobacco
  $('[data-menu="menu-tobacco-item"').click(function(){
        $("#createBrandButton").hide();
        $('#saveBrandButton').show();
        $('#deleteBrandButton').show();
        $('.menu-hider.menu-active').hide();
        $('#menu-tobacco-item').hide();
        var id = $(this).attr('tobacco_id');

        $("#saveBrandButton").attr('itemID', id)
        $("#deleteBrandButton").attr('delete_tobacco_id', id)

        $.ajax({
            type:'POST',
            url:'{{ route("admin.tobacco.get") }}',
            data:{id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $('#nameOfBrand').text(data.title);
                $('#tobaccoP').text('Бренд');
                $('#titleBrandInput').val(data.title);
                $('#priceBrandInput').val(data.price);

                $("#tobacco_id").attr('name', 'tobacco_id');
                $("#tobacco_id").val(id);

                $('.menu-hider.menu-active').show();
                $('#menu-tobacco-item').show();
            }
        });
    })

  // create tobacco
    $('#createBrandButton').click(function(){
        var id = $(this).attr('itemID');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.tobacco.store") }}',
            data: $('#brandForm').serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });
    });

  // delete tobacco
    $('#deleteBrandButton').click(function(){
        var id = $(this).attr('delete_tobacco_id');
        $.ajax({
            type:'POST',
            url:'{{ route("admin.tobacco.destroy") }}',
            data: {id:id},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        });
    });
})
</script>

@endsection
