<html>
    <head>
        <title>Edit home page</title>
    </head>
    <body>
        Hi there, {{ Auth::user()->name }}!

        <form method="POST" enctype="multipart/form-data"
            @if ( isset($home) )
                action="{{ route('home.update', $home) }}"
            @else
                action="{{ route('home.store') }}"
            @endif
            class="row row-cols-lg-auto g-3 align-items-center">
            @csrf
            @isset($category)
                @method('PUT')
            @endisset

            left block
            <input type="file" name="left_block_img">
            <input type="text" name="left_block_text" value="{{ old('left_block_text', isset($home->left_block_text) ? $home->left_block_text : '' ) }}">
            <br>
            upper block
            <input type="file" name="upper_block_img">
            <input type="text" name="upper_block_text" value="{{ old('upper_block_text', isset($home->upper_block_text) ? $home->upper_block_text : '' ) }}">
            <br>
            central block
            <input type="file" name="central_block_img">
            <input type="text" name="central_block_text" value="{{ old('central_block_text', isset($home->central_block_text) ? $home->central_block_text : '' ) }}">
            <br>
            lower block
            <input type="file" name="lower_block_img" value="">
            <input type="text" name="lower_block_text" value="{{ old('lower_block_text', isset($home->lower_block_text) ? $home->lower_block_text : '' ) }}">

            <button type="submit">save</button>
        </form>

        @isset ($home)
        {{ $home }}
        @endisset
    </body>
</html>
