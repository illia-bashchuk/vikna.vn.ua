<div class="container">
    <header>
        <div class="row justify-content-center mt-2">
            <div class="col-12 col-md-4 order-2 order-md-1 text-center text-md-right  sub-sub-sub-header">
                <span>@lang('messages.header_span1')</span><br>
                <span>@lang('messages.header_span2')</span>
            </div>
            <div class="col-md-auto col-md-4 order-1 order-md-2 text-center">
                <a href="{{ url('/') }}"> <img src="{{ url('public/img/200x0/logo.png') }}"
                        class="img-fluid lazyload" alt="Євровікна"></a>
                @include('components.language-switch')

            </div>
            <div class="col-12 col-md-4 order-3 order-md-3 text-center text-md-left">
                <div class="phone-1">
                    <a href="tel:+38(067) 276-66-87">+38067-276-66-87<br></a>
                    <a href="tel:+38(067) 276-46-59">+38067-276-46-59<br></a>

                </div>
            </div>
        </div>
    </header>
</div>
