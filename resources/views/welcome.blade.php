<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}">

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
    <script src="js/lazysizes.min.js" async=""></script>
    <title>
        Євровікна Жмеринка - Металопластикові вікна та двері, захисні ролети, гаражні ворота. VEKA. LUVIN.
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description"
        content="Продаж та встановлення пластикових вікон та дверей, захисних ролетів та гаражних воріт. Працюємо по м.Жмеринка та Вінницькій області. Євровікна. +38067-276-66-87 +38067-276-46-59" />
    <meta name="keywords" content="металопластикові вікна Жмеринка, металопластикові двері, пластикові вікна,
        двері вхідні, вхідні двері, пластикові двері, пластикові вікна ціна,
        металопластикові вікна ціна,вікна металопластикові,гаражні ворота,
        вікна Жмеринка, міжкімнатні двері, фасадні системи, вікна VEKA, захисні ролети" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link
        href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CPT+Sans+Narrow:400,700%7CRusso+One&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="alternate" hreflang="ru-UA" href="ru/index.html" />
    <link rel="alternate" hreflang="uk-UA" href="index.html" />
</head>

<body>
    <div class="container">
        <header>
            <div class="row justify-content-center mt-2">
                <div class="col-12 col-md-4 order-2 order-md-1 text-center text-md-right  sub-sub-sub-header">
                    <span>Продаж та встановлення пластикових вікон та дверей</span><br>
                    <span>Працюємо по м.Жмеринка та Вінницькій області</span>
                </div>
                <div class="col-md-auto col-md-4 order-1 order-md-2 text-center">
                    <img src="img/200x0/e1269f3c19f739f6a292c69fa48a5a69.png" class="img-fluid lazyload"
                        alt="Євровікна">
                    <div class="language-switch">
                        <nav class="nav justify-content-center">
                            <a class="nav-link" href="index.html"><img class="img-fluid lazyload"
                                    data-src="img/100x0/ukraine.jpg"
                                    alt="Прапор України" /></a>
                            <a class="nav-link" href="ru/index.html"><img class="img-fluid lazyload"
                                    data-src="img/100x0/russia.jpg"
                                    alt="Прапор Росії" /></a>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-3 order-md-3 text-center text-md-left">
                    <div class="phone-1">
                        +38067-276-66-87<br>
                        +38067-276-46-59<br>
                    </div>
                    <div class="btn-1-clickable btn-1 mx-auto mx-lg-0">
                        Замовити дзвінок
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="container-fluid">
        <div class="row main-screen-background my-3 justify-content-center">
            <div class="dark"></div>
            <div class="noise"></div>
            <div class="col-12 col-md-10 text-center mb-5">
                <div class="main-screen-title ">
                    <h1>Ліцензійні протизламні вікна
                        з класом протизламу <span class="rc1">RC1</span> та
                        <span class="rc1">RC2</span></h1>
                </div>
                <div class="btn-1-clickable mx-auto btn-2">
                    Замовити
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="sub-header">Чому нас обрали більше 3000 клієнтів?</h2>
        </div>
        <div class="row justify-content-center">
            <h3 class="sub-sub-header">Наші товари та послуги:</h3>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/1.jpg" alt="Вікно металопластикове">
                <div class="services-title">
                    Вікна металопластикові
                </div>
            </div>
            <div class="col-12 col-md-4 text-center ">
                <img class="shadow lazyload" data-src="img/200x200/6.jpg" alt="Двері вхідні">
                <div class="services-title">
                    Двері металопластикові
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/4.jpg" alt="Фото профіллю у розрізі">
                <div class="services-title">
                    Монтаж згідно ДСТУ
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/8.jpg" alt="Підвіконня">
                <div class="services-title">
                    Підвіконники та відливи
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/9.jpg" alt="Протизламні вікна">
                <div class="services-title">
                    Протизламні вікна
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/5.jpg" alt="Двері алюмінієві">
                <div class="services-title">
                    Двері алюмінієві
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/7.jpg" alt="Вікно із захисним ролетом">
                <div class="services-title">
                    Захисні ролети
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/2.jpeg" alt="Гаражні ворота, фото із середини">
                <div class="services-title">
                    Гаражні ворота
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="shadow lazyload" data-src="img/200x200/3.jpg" alt="Монтажник регулює віконну ручку">
                <div class="services-title">
                    Гарантія та ремонт
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="sub-header">
                <div>Пропонуємо великий вибір вікон<br></div>
            </div>
        </div>
        <div class="row justify-content-center my-2 ">
            <div class="sub-sub-sub-header">
                ВСТИГНИ ЗАМОВИТИ ПО АКЦІЇ - ЗІ ЗНИЖКОЮ 3%
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/veka_euroline.jpg"
                    alt="Профіль Veka EUROLINE">
                <div class="services-title">
                    Veka EUROLINE
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 58мм</li>
                        <li>Кількість камер - 3</li>
                        <li>Ширина склопакета- 24, 32мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 0,65 (Норма 0,75) </li>
                        <li>Кольори - тільки білий</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Для холодних балконів, лоджій, та веранд.
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/veka_softline70.jpg"
                    alt="Veka SOFTLINE 70">
                <div class="services-title">
                    Veka SOFTLINE 70
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 70мм</li>
                        <li>Кількість камер - 5</li>
                        <li>Ширина склопакета- 24, 32, 40мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 0,83 (Норма 0,75)</li>
                        <li>Кольори - більше 50 кольорів</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Тепле вікно для квартир та будинків.
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/veka_softline82.jpg"
                    alt="Профіль Veka SOFTLINE 82">
                <div class="services-title">
                    Veka SOFTLINE 82
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 82мм</li>
                        <li>Кількість камер - 7</li>
                        <li>Ширина склопакета- 44мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 1,06 (Норма 0,75)</li>
                        <li>Кольори - більше 50 кольорів</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Найтепліше вікно!!!
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/whs_60.jpg" alt="Профіль WHS 60">
                <div class="services-title">
                    WHS 60
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 60мм</li>
                        <li>Кількість камер - 4</li>
                        <li>Ширина склопакета- 24, 31мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 0,66 (Норма 0,75)</li>
                        <li>Кольори - тільки білий</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Для холодних балконів, лоджій, та веранд.
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/WHS _72.jpg" alt="Профіль WHS 72">
                <div class="services-title">
                    WHS 72
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 72мм</li>
                        <li>Кількість камер - 5</li>
                        <li>Ширина склопакета- 24, 31мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 0,77 (Норма 0,75)</li>
                        <li>Кольори - сонячний та темний дуб</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Недороге вікно для квартир та будинків
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
            <div class="col-12 col-md-4 text-center my-4">
                <img class="shadow img-fluid my-2 lazyload" data-src="img/300x150/SOFTLINE_door.jpg"
                    alt="Профіль для дверей Veka">
                <div class="services-title">
                    Двері Veka
                </div>
                <div class="list-of-properties text-left">
                    <ul>
                        <li>Ширина профілю - 70мм</li>
                        <li>Кількість камер - 5</li>
                        <li>Ширина склопакета- 24, 32, 40мм</li>
                        <li>Коефіцієнт опору теплопередачі м<sup>2</sup>С/Вт - 0,83 (Норма 0,75)</li>
                        <li>Кольори - більше 50 кольорів</li>
                    </ul>
                </div>
                <div class="brief-description">
                    Теплі двері для квартир та будинків.
                </div>
                <div class="btn-1-clickable btn-1 mx-auto">Замовити</div>
            </div>
        </div>
    </div>

    <div class="container-fluid our-advantages my-2">
        <div class="row justify-content-center ">
            <div class="sub-sub-header my-2 white-font">
                Наші переваги:
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col text-right mb-4">
                <img class="img-fluid lazyload" data-src="img/120x120/yakist.png" title="Якість" alt="Якість" />
            </div>
            <div class="col text-center mb-4">
                <img class="img-fluid lazyload" data-src="img/120x120/garantia.png" title="Гарантія" alt="Гарантія" />
            </div>
            <div class="col text-left mb-4">
                <img class="img-fluid lazyload" data-src="img/120x120/servis.png" title="Сервіс" alt="Сервіс" />
            </div>
        </div>
    </div>

    <div class="container section ">
        <div class="row justify-content-center my-3 ">
            <div class="sub-sub-header  ">
                Монтаж згідно ДСТУ
            </div>
            <div class="sub-sub-sub-header text-center">
                <b>Професійний</b> монтаж вікон забезпечить
                <b>довговічність</b>,
                <b> виключить</b> появу протягів та плісняви на відкосах,<br>
                а також <b>зменшить</b> Ваші <b>витрати</b> на опалення.
            </div>
        </div>
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-4  text-center">
                <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                    Пароізоляційна стрічка
                </div>
                <div class="image_box">
                    <img class="img-fluid shadow  lazyload" data-src="img/300x225/1.jpg" alt="Професійний монтаж">
                    <div class="overlay_image_box ">
                        <div class="overlay_image_title sub-sub-header">
                            Пароізоляційна стрічка
                        </div>
                        <div class="overlay_image_descr">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center  ">
                <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                    Пароізоляційна стрічка
                </div>
                <div class="image_box">
                    <img class="img-fluid shadow lazyload" data-src="img/300x225/2.jpg" alt="Професійний монтаж">
                    <div class="overlay_image_box lazyload">
                        <div class="overlay_image_title sub-sub-header">
                            Пароізоляційна стрічка
                        </div>
                        <div class="overlay_image_descr">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center ">
                <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                    ПСУС
                </div>
                <div class="image_box">
                    <img class="img-fluid shadow  lazyload" data-src="img/300x225/3.jpg" alt="Професійний монтаж">
                    <div class="overlay_image_box">
                        <div class="overlay_image_title sub-sub-header">
                            ПСУС
                        </div>
                        <div class="overlay_image_descr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  ">
        <div class="row justify-content-center my-3">
            <div class="col text-center">
                <div class="sub-sub-sub-header  ">
                    Прямо зараз замовте розрахунок вартості встановлення пластикових вікон
                </div>
                <div class="btn-1-clickable btn-3 mx-auto my-3">
                    Замовити розрахунок
                </div>
                <div class="sub-sub-sub-header  ">
                    <span>
                        Наш спеціаліст зв'яжеться з вами для уточненя деталей
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center my-5">
        
            <div class="sub-header">
                Наші роботи
            </div>
            <div class="sub-sub-sub-header  ">
                Проекти, якими ми можемо пишатись
            </div>
            <div class="row  ">
                <div class="col-12 col-md-6 my-auto">
                    <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                        Зимовий сад
                    </div>
                    <div class="image_box">
                        <img class="img-fluid shadow image lazyload" data-src="img/460x350/4.jpg" alt="Вікно">
                        <div class="overlay_image_box">
                            <div class="overlay_image_title sub-sub-header ">
                                Зимовий сад
                            </div>
                            <div class="overlay_image_descr">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="row my-2">
                        <div class="col-12 col-md-6">
                            <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                                Двері
                            </div>
                            <div class="image_box">
                                <img class="img-fluid shadow lazyload" data-src="img/220x165/5.jpg" alt="Вікно">
                                <div class="overlay_image_box">
                                    <div class="overlay_image_title sub-sub-header">
                                        Двері
                                    </div>
                                    <div class="overlay_image_descr">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                                Вхідні двері
                            </div>
                            <div class="image_box">
                                <img class="img-fluid shadow lazyload" data-src="img/220x165/6.jpg" alt="Вікно">
                                <div class="overlay_image_box">
                                    <div class="overlay_image_title sub-sub-header">
                                        Вхідні двері
                                    </div>
                                    <div class="overlay_image_descr">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 col-md-6">
                            <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                                Балкон
                            </div>
                            <div class="image_box">
                                <img class="img-fluid shadow lazyload" data-src="img/220x165/7.jpg" alt="Вікно">
                                <div class="overlay_image_box">
                                    <div class="overlay_image_title sub-sub-header">
                                        Балкон
                                    </div>
                                    <div class="overlay_image_descr">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="image-title-for-sm d-block d-sm-none sub-sub-sub-header">
                                Гаражні ворота
                            </div>
                            <div class="image_box">
                                <img class="img-fluid shadow lazyload" data-src="img/220x165/8.jpg" alt="Вікно">
                                <div class="overlay_image_box">
                                    <div class="overlay_image_title sub-sub-header">
                                        Гаражні ворота
                                    </div>
                                    <div class="overlay_image_descr">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    <div class="container-fluid my-5">
        <div class="row text-center my-5">
            <div class="col">
                <div class="sub-header  ">
                    Наше місцезнаходження
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="lazyload embed-responsive-item"
                        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2259.527617938853!2d28.111410893105g848!3d49.03191428357094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732a2bd6133296b%3A0xb349e5b9f4082ba2!2z0ITQstGA0L7QstGW0LrQvdCw!5e0!3m2!1suk!2sua!4v1503087053806">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row footer-screen-background py-4  justify-content-center">
            <div class="noise">
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-5  my-auto">
                <div class="iqenergy-logo ">
                    <a href="http://www.iqenergy.org.ua/">
                        <img data-src="img/iqenergy.png" class="img-fluid lazyload" alt="iqenergy">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 col-xl-4  form_wrapper p-3 my-5">
                <div class="sub-sub-header text-center">
                    Залиште заявку на замір!
                </div>
                <div class="list-of-properties text-center">
                    Виклик замірщика - безкоштовно!
                </div>
                <form action="./php/handler.php" enctype="multipart/form-data" method="post"
                class="was-validated form-reset">
                    <div class="form-group col list-of-properties">
                        <label for="formGroupExampleInput">Введіть ім'я</label>
                        <input name="name" type="text" required="required" class="form-control"
                            id="formGroupExampleInput" 
                            maxlength="18"
                            minlength="3">
                             <div class="valid-feedback">
                                 Ім'я введено!
                             </div>
                             <div class="invalid-feedback">
                                 Ім'я не введено.
                             </div>
                    </div>
                    <div class="form-group col list-of-properties">
                        <label for="formGroupExampleInput2">
                            Введіть номер телефону<br>
                            Наш менеджер Вам передзвонить
                        </label>
                        <input name="phone" type="tel" required="required" class="form-control" id="formGroupExampleInput2"
                        pattern="[\+]\d{2}\d{3}\d{7}"
                        data-mask="+380000000000"
                        maxlength="18"
                        title="Не правильний формат вводу">
                        <div class="valid-feedback">
                            Номер введено правильно!
                        </div>
                        <div class="invalid-feedback">
                            Формат вводу: +380672766687
                        </div>
                    </div>
                    <div class="form-group col">
                        <div class="field_input footer-btn ">
                            <input type="submit" data-action="thanks" data-url="" data-amount="0"
                                value="Замовити замір">
                        </div>
                    </div>
                    <div class="list-of-properties col">
                        Ми не передаємо Вашу персональну інформацію третім особам.
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-12 col-md-3 logo_img">
                <img class="img-fluid lazyload" data-src="img/200x0/e1269f3c19f739f6a292c69fa48a5a69.png"
                    alt="Євровікна">
            </div>
            <div class="col-12 col-md-5 address-and-ua">
                <div class="address1 sub-sub-sub-header">
                    23100, м.Жмеринка, вул. Київська, 16
                </div>
                <div class="policy">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#policyModal">
                        Політика конфіденційності
                    </button>
                    
                </div>
            </div>
            <div class="col-12 col-md-4 phone-and-address">
                <div class="phone-1">
                    +38067-276-66-87<br>
                    +38067-276-46-59<br>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="policyModal" tabindex="-1" role="dialog" aria-labelledby="policyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="policyModalLabel">Політика конфіденційності</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Даний сайт поважає Ваше право і зберігає конфіденційність при заповненні, передачі і зберіганні
                    Ваших конфіденційних даних. 
                    Розміщення заявки на даному сайті означає Вашу згоду на обробку даних і подальшу передачу ваших
                    контактних даних нашій компанії. 
                    Під персональними даними розуміється інформація, яка відноситься до суб'єкта персональних даних, в
                    тому числі ім'я, контактні реквізити (адреса електронної пошти) та інші данні. 
                    Ціллю обробки персональних даних є інформування про послуги нашої компанії. 
                    Є питання? Пишіть нам на kolyaboiko@gmail.com
                </div>
                
            </div>
        </div>
    </div>
    <!-- Форма для заявки №1 -->
    <div class="container-fluid popup_form fixed-top">
        <div class="row  justify-content-center">
            <div class="col col-md-5 col-lg-4  my-2 mx-2 popup_form_inner">
                <button type="button" class="close popup_form_close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="sub-sub-header text-center">
                    Залишити заявку
                </div>
                <form action="./php/handler.php" enctype="multipart/form-data" method="post"
                    class="was-validated form-reset"
                    >
                    <div class="form-group col list-of-properties">
                        <label for="formGroupExampleInput">Введіть ім'я</label>
                        <input name="name" type="text" required="required" class="form-control"
                        maxlength="18"
                        minlength="3">
                        <div class="valid-feedback">
                            Ім'я введено!
                        </div>
                        <div class="invalid-feedback">
                            Ім'я не введено.
                        </div>
                    </div>
                    <div class="form-group col list-of-properties">
                        <label for="formGroupExampleInput2">
                            Введіть номер телефону<br>
                            Наш менеджер Вам передзвонить
                        </label>
                        <input name="phone" type="tel" required="required" class="form-control phone"
                            pattern="[\+]\d{2}\d{3}\d{7}"
                            data-mask="+380000000000"
                            maxlength="18"
                            title="Не правильний формат вводу"
                            >
                            <div class="valid-feedback">
                                Номер введено правильно!
                            </div>
                            <div class="invalid-feedback">
                                Формат вводу: +380672766687
                            </div>
                    </div>
                    <div class="form-group col">
                        <div class="field_input popup-form-btn ">
                            <input type="submit" data-action="thanks" data-url="" data-amount="0"
                                value="Замовити замір">
                        </div>
                    </div>
                    <div class="sub-sub-sub-sub-header col">
                        Ми не передаємо Вашу персональну інформацію третім особам.
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="popup_thanks container-fluid">
        <div class="row">
            <div class="col-11 col-md-5 popup_thanks_inner text-center">
                <button type="button" class="close popup_form_close my-2" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="sub-sub-header  m-3">
                    Дякуємо за заявку!
                </div>
                <div class="sub-sub-sub-header m-3">
                    Заявку відправлено. Наш менеджер зв'яжеться з Вами найближчим часом.
                </div>
            </div>
        </div>
    </div>

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
    
    <script src="js/script.js"></script>
    
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