@extends('components.layout')
@section('title', 'Каталог - Євровікна Жмеринка')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="gallery" style="display:none;">
                @foreach ($photos as $photo)
                <img alt="{{ $photo->photo_name }}" src="{{ url("thumbnail/{$photo->path}") }}" data-image="{{ url("photo/{$photo->path}") }}"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#gallery").unitegallery({
            tile_width:180,
            tile_height:300,
            grid_num_rows:300,
            grid_space_between_cols: 5,				//space between columns
            grid_space_between_rows: 5,				//space between rows
            grid_space_between_mobile: 5,

        });
    });
</script>
@endsection
