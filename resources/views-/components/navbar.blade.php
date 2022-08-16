<nav class="nav navbar my-navbar navbar-expand-lg justify-content-center">
    <button class="navbar-toggler btn my-nav-btn  btn-sm" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon">sdfgsdfgdfg</span> --}}Меню
      </button>
    <div class="row justify-content-center collapse navbar-collapse " id="navbar">
        <div class="col-12 col-md-8 text-center " >
            <a href="{{ url(app()->getLocale().'/windows') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'windows') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.vikna')</a>
            <a href="{{ url(app()->getLocale().'/doors') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'doors') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.dveri')</a>
            <a href="{{ url(app()->getLocale().'/catalog') }}" class="btn my-nav-btn my-text-shadow  btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'catalog') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.katalog')</a>
            <a href="{{ url(app()->getLocale().'/profile') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'profile') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.profil')</a>
            <a href="{{ url(app()->getLocale().'/furniture') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'furniture') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.furnitura')</a>
            <a href="{{ url(app()->getLocale().'/sale') }}" class="btn my-nav-btn my-text-shadow btn-lg m-3
    {{ url()->current() === url(app()->getLocale().'sale') ? 'my-active' : ''}}" role="button"
                aria-pressed="true">@lang('messages.rozprodazh')</a>
        </div>
    </div>
</nav>
