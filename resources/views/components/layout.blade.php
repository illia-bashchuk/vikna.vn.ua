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
    <script src="public/js/lazysizes.min.js" async=""></script>
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
    <link href="public/css/normalize.css" rel="stylesheet" type="text/css" />
    <link
        href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CPT+Sans+Narrow:400,700%7CRusso+One&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link href="public/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
                    <img src="public/img/200x0/e1269f3c19f739f6a292c69fa48a5a69.png" class="img-fluid lazyload"
                        alt="Євровікна">
                    <div class="language-switch">
                        <nav class="nav justify-content-center">
                            <a class="nav-link" href="index.html"><img class="img-fluid lazyload"
                                    data-src="public/img/100x0/ukraine.jpg"
                                    alt="Прапор України" /></a>
                            <a class="nav-link" href="ru/index.html"><img class="img-fluid lazyload"
                                    data-src="public/img/100x0/russia.jpg"
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

@yield('content')


    <div class="container-fluid">
        <div class="row footer-screen-background py-4  justify-content-center">
            <div class="noise">
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-5  my-auto">
                <div class="iqenergy-logo ">
                    <a href="http://www.iqenergy.org.ua/">
                        <img data-src="public/img/iqenergy.png" class="img-fluid lazyload" alt="iqenergy">
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
                <img class="img-fluid lazyload" data-src="public/img/200x0/e1269f3c19f739f6a292c69fa48a5a69.png"
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

    <script src="public/js/script.js"></script>

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
