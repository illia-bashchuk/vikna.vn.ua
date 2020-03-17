<nav class="nav my-navbar justify-content-center">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
            <a href="{{ url($local.'windows') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url($local.'windows') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.vikna')</a>
            <a href="{{ url($local.'doors') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url($local.'doors') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.dveri')</a>
            <a href="{{ url($local.'catalog') }}" class="btn my-nav-btn my-text-shadow  btn-lg m-3
    {{ url()->current() === url($local.'catalog') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.katalog')</a>
            <a href="{{ url($local.'profile') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url($local.'profile') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.profil')</a>
            <a href="{{ url($local.'furniture') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url($local.'furniture') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.furnitura')</a>
            <a href="{{ url($local.'sale') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url($local.'sale') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.rozprodazh')</a>
        </div>
    </div>
</nav>
