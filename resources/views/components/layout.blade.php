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
    <meta name="description"
        content="Продаж та встановлення пластикових вікон та дверей, захисних ролетів та гаражних воріт. Працюємо по м.Жмеринка та Вінницькій області. Євровікна. +38067-276-66-87 +38067-276-46-59" />
    <meta name="keywords" content="металопластикові вікна Жмеринка, металопластикові двері, пластикові вікна,
        двері вхідні, вхідні двері, пластикові двері, пластикові вікна ціна,
        металопластикові вікна ціна,вікна металопластикові,гаражні ворота,
        вікна Жмеринка, міжкімнатні двері, фасадні системи, вікна VEKA, захисні ролети" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ url('public/css/normalize.css') }}" rel="stylesheet" type="text/css" />
    <link
        href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CPT+Sans+Narrow:400,700%7CRusso+One&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}">
    <link href="{{ url('public/favicon.ico') }} " rel="shortcut icon" type="image/x-icon" />
    <link rel="alternate" hreflang="ru-UA" href="ru/" />
    <link rel="alternate" hreflang="uk-UA" href="/" />
</head>

<body>
    @include('components.header')

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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

    <script type="text/javascript">
        $(function () {
        $('form[action="./php/handler.php"]').submit(function (event) {
            event.preventDefault();
            var formData = new FormData($(this)[0]);
            var this_block = $(this).closest('body');
            $.ajax({
                type: "POST",
                url: "./php/handler.php",
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false
            }).done(function (data) {
                this_block.find('.popup_form').hide();
                this_block.find('.form-reset')[0].reset();
                this_block.find('.popup_thanks').show();
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
