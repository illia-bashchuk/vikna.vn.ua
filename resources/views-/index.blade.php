@extends('components.layout')

@section('title')
@lang('messages.title_index')
@endsection

@section('content')

<div class="container ">
    <div class="row justify-content-center my-3">
        <h2 class="sub-header blue-font ">@lang('messages.index_we_offer')</h2>
    </div>

    <div class="row justify-content-center my-5">

        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/windows') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/1.jpg') }}"
                    alt="Вікно металопластикове">
                <div class="services-title">
                    @lang('messages.index_windows')
                </div>
            </a>

        </div>
        <div class="col-12 col-md-4 text-center ">
            <a href="{{ url(app()->getLocale().'/doors') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/6.jpg') }}" alt="Двері вхідні">
                <div class="services-title">
                    @lang('messages.index_doors')
                </div>
            </a>

        </div>
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/dstu') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/4.jpg') }}"
                    alt="Фото профіллю у розрізі">
                <div class="services-title">
                    @lang('messages.index_dstu')
                </div>
            </a>

        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/windowsill') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/8.jpg') }}" alt="Підвіконня">
                <div class="services-title">
                    @lang('messages.index_windowssill')
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/anti-theft') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/9.jpg') }}" alt="Протизламні вікна">
                <div class="services-title">
                    @lang('messages.index_anti_theft')
                </div>
            </a>

        </div>
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/aluminium') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/5.jpg') }}" alt="Двері алюмінієві">
                <div class="services-title">
                    @lang('messages.index_aluminium')
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/roller') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/7.jpg') }}"
                    alt="Вікно із захисним ролетом">
                <div class="services-title">
                    @lang('messages.index_roller')
                </div>
            </a>

        </div>
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/gates') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/2.jpeg') }}"
                    alt="Гаражні ворота, фото із середини">
                <div class="services-title">
                    @lang('messages.index_gates')
                </div>
            </a>

        </div>
        <div class="col-12 col-md-4 text-center">
            <a href="{{ url(app()->getLocale().'/warranty') }}">
                <img class="shadow lazyload" data-src="{{ url('public/img/200x200/3.jpg') }}"
                    alt="Монтажник регулює віконну ручку">
                <div class="services-title">
                    @lang('messages.index_warranty')
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid text-center my-5">

    <div class="sub-header blue-font mb-3">
        @lang('messages.index_our_works')
    </div>

    <div class="galery">
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-width="100%" data-ratio="1.3333333333">
            @foreach ($photos as $photo)
            <a href="{{ url("photo/$photo->path") }}"><img class="lazyload" src="{{ url("thumbnail/$photo->path") }}" alt="{{ $photo->photo_name }}"></a>
            @endforeach
        </div>
    </div>
</div>
@endsection
