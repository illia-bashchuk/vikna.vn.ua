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
                    <li class="{{ Route::currentRouteName() ==  'edit-our-works.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-our-works.index') }}" > <i class="menu-icon fa fa-picture-o"></i>Наші роботи</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-windows.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-windows.index') }}" > <i class="menu-icon fa fa-windows"></i>Вікна металопластикові</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-doors.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-doors.index') }}" > <i class="menu-icon fa fa-square"></i>Двері металопластикові</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-catalog.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-catalog.index') }}" > <i class="menu-icon fa fa-folder-o"></i>Каталог</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-profile.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-profile.index') }}" > <i class="menu-icon fa fa-columns"></i>Профіль</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-furniture.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-furniture.index') }}" > <i class="menu-icon fa fa-cogs"></i>Фурнітура</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-sale.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-sale.index') }}" > <i class="menu-icon fa fa-credit-card"></i>Розпродаж</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-dstu.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-dstu.index') }}" > <i class="menu-icon fa fa-info"></i>Монтаж згідно ДСТУ</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-windowsill.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-windowsill.index') }}" > <i class="menu-icon fa fa-window-minimize"></i>Підвіконники та відливи</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-anti_theft.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-anti_theft.index') }}" > <i class="menu-icon fa fa-lock"></i>Протизламні вікна</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-aluminium.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-aluminium.index') }}" > <i class="menu-icon fa ">Ag</i>Двері алюмінієві</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-roller.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-roller.index') }}" > <i class="menu-icon fa fa-align-justify"></i>Захисні ролети</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-gates.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-gates.index') }}" > <i class="menu-icon fa fa-car"></i>Гаражні ворота</a>
                    </li>
                    <li class="{{ Route::currentRouteName() ==  'edit-warranty.index' ? 'active' : ''}}">
                        <a href="{{ route('edit-warranty.index') }}" > <i class="menu-icon fa fa-life-ring"></i>Гарантія та ремонт</a>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
