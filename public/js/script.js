$(function () {
    /*
     ***
     * ФУНКЦІЯ ПОКАЗУ МОДАЛЬНОГО ВІКНА ФОРМИ ЗАЯВКИ
     ***
     * 
     * 
     ***
     */
    $('div.btn-1-clickable').click(function () {
        $(".popup_form").show();
    })
    /*
     ***
     * ФУНКЦІЯ ПРИХОВУВАННЯ МОДАЛЬНОГО ВІКНА ФОРМИ ЗАЯВКИ ТА МОДАЛЬНОГО ВІКНА ПОДЯКИ ЗА ЗАЯВКУ
     ***
     * 
     * 
     ***
     */
    $('body').on('click', '.popup_thanks_close, .popup_form_close', function () {
        $('.popup_thanks').hide();
        $('.popup_form').hide();
    })
    /*
     ***
     * ФУНКЦІЯ ПРИХОВУВАННЯ МОДАЛЬНОГО ВІКНА ФОРМИ ЗАЯВКИ
     ***
     * 
     * 
     ***
     */
    $('body').on('click', '.popup_form', function (event) {
        if ($(event.target).closest(".popup_form_inner").length === 0) {
            $('.popup_form').hide();
        }
    });
    /*
     ***
     * ФУНКЦІЯ ПРИХОВУВАННЯ МОДАЛЬНОГО ВІКНА ПОДЯКИ ЗА ЗАЯВКУ
     ***
     * 
     * 
     ***
     */
    $('body').on('click', '.popup_thanks', function (event) {
        if ($(event.target).closest(".popup_thanks_inner").length === 0) {
            $('.popup_thanks').hide();
        }
    });
    /*
     ***
     * ФУНКЦІЯ ВМИКАННЯ РЕЖИМУ ПЕРЕГЛЯДУ ФОТО В ПОВНОЕКРАНОМУ РЕЖИМІ
     ***
     * 
     * 
     ***
     */
    if ($('.overlay_image_box').length) {
        $('.overlay_image_box').click(function () {
            var this_section = $(this).closest('.image_box');
            if (this_section.hasClass('image_box')) {
                var image_url = $(this).parent().children().attr('src');
                var t_arr = image_url.split('/');
                var new_image_url = './img/800x600/' + t_arr[2];
                if ($('#img_zoomer_bg').length) {
                    $('#img_zoomer_bg').remove();
                }                
                $('body').append('<div class="container-fluid " id="img_zoomer_bg"><div class="row align-self-center align-items-center text-center "><div class="col "><img class="img-fluid " src="' + new_image_url + '" alt="Вікно металопластикове"></div></div></div></div>');
            }            
        })
    }
    /*
     ***
     * ФУНКЦІЯ ВИМИКАННЯ РЕЖИМУ ПЕРЕГЛЯДУ ФОТУ В ПОВНОЕКРАНОМУ РЕЖИМІ
     ***
     * 
     * 
     ***
     */
    $('body').on('click', '#img_zoomer_bg', function () {
        if ($('#img_zoomer_bg').length) {
            $('#img_zoomer_bg').remove();
        }
    })
})


