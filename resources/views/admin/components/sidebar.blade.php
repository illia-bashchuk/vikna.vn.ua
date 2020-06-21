     <!-- Left Panel -->

     <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('public/vendor/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{ url('/') }}"><img src="{{ url('public/vendor/images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Route::currentRouteName() == 'admin' ? 'active' : ''}}">
                        <a href="{{ route('admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Головна </a>
                    </li>
                    <h3 class="menu-title">Редагувати сторінки</h3><!-- /.menu-title -->
                    <li class="{{ url()->full() ==  url("/admin/edit?page=ourworks") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=ourworks") }}" > <i class="menu-icon fa fa-picture-o"></i>Наші роботи</a>
                    </li>
                    <li class="{{url()->full() ==  url("/admin/edit?page=windows") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=windows") }}" > <i class="menu-icon fa fa-windows"></i>Вікна металопластикові</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=doors") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=doors") }}" > <i class="menu-icon fa fa-square"></i>Двері металопластикові</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=catalog") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=catalog") }}" > <i class="menu-icon fa fa-folder-o"></i>Каталог</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=profile") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=profile") }}" > <i class="menu-icon fa fa-columns"></i>Профіль</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=furniture") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=furniture") }}" > <i class="menu-icon fa fa-cogs"></i>Фурнітура</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=sale") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=sale") }}" > <i class="menu-icon fa fa-credit-card"></i>Розпродаж</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=dstu") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=dstu") }}" > <i class="menu-icon fa fa-info"></i>Монтаж згідно ДСТУ</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=windowsill") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=windowsill") }}" > <i class="menu-icon fa fa-window-minimize"></i>Підвіконники та відливи</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=antitheft") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=antitheft") }}" > <i class="menu-icon fa fa-lock"></i>Протизламні вікна</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=aluminium") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=aluminium") }}" > <i class="menu-icon fa ">Ag</i>Двері алюмінієві</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=roller") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=roller") }}" > <i class="menu-icon fa fa-align-justify"></i>Захисні ролети</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=gates") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=gates") }}" > <i class="menu-icon fa fa-car"></i>Гаражні ворота</a>
                    </li>
                    <li class="{{url()->full() == url("/admin/edit?page=warranty") ? 'active' : ''}}">
                        <a href="{{ url("/admin/edit?page=warranty") }}" > <i class="menu-icon fa fa-life-ring"></i>Гарантія та ремонт</a>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
