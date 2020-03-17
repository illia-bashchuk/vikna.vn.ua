<div class="language-switch">
    <nav class="nav justify-content-center">
        <a class="nav-link {{ app()->getLocale() === 'uk' ? 'my-active' : ''}}" href="
        @if (app()->getLocale() === 'uk')
            {{url()->current()}}
        @elseif (app()->getLocale() === 'ru')
            {{url(request()->root().'/'.request()->segment(2))}}
        @endif">укр</a>
        <a class="nav-link {{ app()->getLocale() === 'ru' ? 'my-active' : ''}}" href="
        @if (app()->getLocale() === 'uk' and url()->current() != request()->root())
            {{url(request()->root().'/ru/'.request()->segment(1))}}
        @elseif (app()->getLocale() === 'uk' and url()->current() === request()->root())
            {{url(request()->root().'/ru'.request()->segment(1))}}
        @elseif (app()->getLocale() === 'ru')
            {{url()->current()}}
        @endif">рус</a>
    </nav>
</div>

