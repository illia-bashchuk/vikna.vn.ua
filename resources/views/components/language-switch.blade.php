<div class="language-switch">
    <nav class="nav justify-content-center">
        <a class="nav-link {{ app()->getLocale() === 'uk' ? 'my-active' : ''}}" href="
        @if (app()->getLocale() === 'uk')
            {{url()->current()}}
        @elseif (app()->getLocale() === 'ru')
            {{url('uk/'.request()->segment(2))}}
        @endif">укр</a>
        <a class="nav-link {{ app()->getLocale() === 'ru' ? 'my-active' : ''}}" href="
        @if (app()->getLocale() === 'uk' )
            {{url('ru/'.request()->segment(2))}}
        @elseif (app()->getLocale() === 'ru')
            {{url()->current()}}
        @endif">рус</a>
    </nav>
</div>

