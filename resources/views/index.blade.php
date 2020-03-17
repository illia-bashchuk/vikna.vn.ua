@extends('components.layout')
@section('title', 'Євровікна Жмеринка - Металопластикові вікна та двері, захисні ролети, гаражні ворота. VEKA. LUVIN.')

@section('content')

<div class="container ">
    <div class="row justify-content-center my-3">
        <h2 class="sub-header blue-font ">Ми пропонуєм Вам:</h2>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/1.jpg" alt="Вікно металопластикове">
            <div class="services-title">
                Вікна металопластикові
            </div>
        </div>
        <div class="col-12 col-md-4 text-center ">
            <img class="shadow lazyload" data-src="public/img/200x200/6.jpg" alt="Двері вхідні">
            <div class="services-title">
                Двері металопластикові
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/4.jpg" alt="Фото профіллю у розрізі">
            <div class="services-title">
                Монтаж згідно ДСТУ
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/8.jpg" alt="Підвіконня">
            <div class="services-title">
                Підвіконники та відливи
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/9.jpg" alt="Протизламні вікна">
            <div class="services-title">
                Протизламні вікна
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/5.jpg" alt="Двері алюмінієві">
            <div class="services-title">
                Двері алюмінієві
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/7.jpg" alt="Вікно із захисним ролетом">
            <div class="services-title">
                Захисні ролети
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/2.jpeg" alt="Гаражні ворота, фото із середини">
            <div class="services-title">
                Гаражні ворота
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <img class="shadow lazyload" data-src="public/img/200x200/3.jpg" alt="Монтажник регулює віконну ручку">
            <div class="services-title">
                Гарантія та ремонт
            </div>
        </div>
    </div>

</div>

<div class="container-fluid text-center my-5">

        <div class="sub-header blue-font mb-3">
            Наші роботи
        </div>

        <div class="galery">
            <div class="fotorama"
            data-nav="thumbs"
            data-allowfullscreen="true"
            data-width="100%"
            data-ratio="1.3333333333"

            >
                <img class="lazyload" src="public/img/800x600/4.jpg" alt="Вікно">
                <img class="lazyload" src="public/img/800x600/5.jpg" alt="Вікно">
                <img class="lazyload" src="public/img/800x600/6.jpg" alt="Вікно">
                <img class="lazyload" src="public/img/800x600/7.jpg" alt="Вікно">
                <img class="lazyload" src="public/img/800x600/8.jpg" alt="Вікно">

            </div>
        </div>



</div>
@endsection
