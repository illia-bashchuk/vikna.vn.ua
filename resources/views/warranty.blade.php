@extends('components.layout')
@section('title', 'Гарантія та ремонт - Євровікна Жмеринка')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="gallery" style="display:none;">
                @foreach ($photos as $photo)
                    <img alt="" data-image="{{ url($photo->url) }}"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
