<header class="header">
    <div class="container header__container">
        <div class="header__block">
            <div class="header__logo-wrapper">
                <a href="{{ route('home') }}" class="header__logo-link" aria-label="Главная страница {{ $siteName }}">
                     <span class="header__logo-text">{{ $siteName }}</span>
                </a>
            </div>
            <!-- <nav class="header__nav" aria-label="Основное меню навигации">
                <a href="{{ route('home') }}"
                class="header__nav-link {{ Route::is('home') ? 'active' : '' }}">
                    Главная
                </a>
                <a href="{{ route('catalog') }}"
                class="header__nav-link {{ Route::is('catalog') ? 'active' : '' }}">
                    Каталог
                </a>
                <a href="{{ route('how-it-works') }}"
                class="header__nav-link {{ Route::is('how-it-works') ? 'active' : '' }}">
                    Как это работает
                </a>
                <a href="{{ route('for-owners') }}"
                class="header__nav-link {{ Route::is('for-owners') ? 'active' : '' }}">
                    Для владельцев
                </a>
            </nav> -->
            <nav class="header__nav" aria-label="Основное меню навигации">
                @foreach ($navigationItems as $item)
                    <a href="{{ route($item->route_name) }}"
                    class="header__nav-link {{ Route::is($item->route_name) ? 'active' : '' }}">
                        {{ $item->label }}
                    </a>
                @endforeach
            </nav>
        </div>
        <div class="header__block">
            <span>Это новый поиск</span>
        </div>
    </div>
</header>
