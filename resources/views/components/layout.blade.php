@php
if (app()->getLocale() === 'uk') {
    $ukr_url = url()->current();
    $rus_url = url('ru/'.request()->segment(2));
} elseif (app()->getLocale() === 'ru') {
    $ukr_url = url('uk/'.request()->segment(2));
    $rus_url = url()->current();
}
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110135530-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-110135530-1');
    </script>
    <script src="{{ url('public/js/lazysizes.min.js') }}" async=""></script>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="@lang('messages.description')" />
    <meta name="keywords" content="@lang('messages.keywords')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    {{-- <script type='text/javascript' src='{{ url('public/unitegallery/js/jquery-11.0.min.js') }}'></script> --}}
    <script type='text/javascript' src='{{ url('public/unitegallery/js/unitegallery.min.js') }}'></script>
    <script type='text/javascript' src='{{ url('public/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js') }}'>
    </script>

    <link rel='stylesheet' href='{{ url('public/unitegallery/css/unite-gallery.css') }}' type='text/css' />
    <link rel='stylesheet' href='{{ url('public/unitegallery/themes/default/ug-theme-default.css') }}'
        type='text/css' />


    <link
        href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CPT+Sans+Narrow:400,700%7CRusso+One&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('public/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}" />


    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/favicon.ico') }}" />
    <link rel="alternate" hreflang="ru-UA" href="{{$rus_url}}" />
    <link rel="alternate" hreflang="uk-UA" href="{{$ukr_url}}" />
</head>

<body>
    @include('components.header')

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="{{ url('public/js/script.js') }}"></script>

    {{-- Okna.ua counter --}}
    <script async charset="UTF-8" src="https://okna.ua/js/calc_button2/okna_1_v2.js"></script><noscript>
        <div
            style="text-align:left;width:88px;height:31px;background:#003399;padding:0;margin:0;border:0;border-radius:0;display:inline-block;position:relative;opacity:1;outline:0;overflow:visible;text-shadow:none;text-transform:none;visibility:visible;z-index:auto;text-indent:0;">
            <a href="https://okna.ua/" title="Металлопластиковые окна, пластиковые окна, ПВХ"
                style="border:0;padding:0;position:absolute;color:#fff;font: bold italic 12px/12px Arial, Verdana, Helvetica, sans-serif;text-decoration:none;margin: 5px 0 0 3px;font-variant:normal;height:auto;width:auto;letter-spacing:normal;opacity:1;outline:0;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:0;z-index:auto;">OKNA.ua</a><a
                href="https://okna.ua/" title="Металлопластиковые окна, пластиковые окна, ПВХ"
                style="border:0;margin:0;padding:0;height:auto;width:auto;line-height:0;opacity:1;outline:0;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;word-spacing:0;z-index:auto;"><img
                    src="https://okna.ua/img/okna_rank_v2.gif"
                    title="OKNA.ua - Металлопластиковые окна, алюминиевые фасады, деревянные окна"
                    alt="ОКНА.ua - оконные системы, каталог, прайсы, объявления"
                    style="margin:0;padding:0;line-height:0;opacity:1;outline:0;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;word-spacing:0;z-index:auto;border:0;"
                    width="88" height="31" /></a></div>
    </noscript>
    {{-- End of Okna.ua counter --}}



    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('focusin', function(event) {
                    form.classList.add('was-validated');
                }, false);
                form.addEventListener('focusout', function(event) {
                    $(this).closest('body').find('form').removeClass('was-validated');
                    console.log('work');
                }, false);
            });
        }, false);
    })();

    $(function () {
        $('form[action="{{ url('/mail') }}"]').submit(function (event) {
            event.preventDefault();
            var formData = new FormData($(this)[0]);
            var this_block = $(this).closest('body');
            $.ajax({
                type: "POST",
                url: "{{ url('/mail') }}",
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false
            }).done(function (data) {
                this_block.find('.popup_form').hide();
                this_block.find('.form-reset')[0].reset();
                this_block.find('.popup_thanks').show();
                this_block.find('form').removeClass('was-validated');
            }).fail(function (jqXHR, status, errorThrown) {
                this_block.find('.popup_form').hide();
                this_block.find('.form-reset')[0].reset();
                this_block.find('.popup_thanks').show();
                console.log(status, errorThrown);
            });
        });
    });
    </script>
</body>

</html>
