<header>
    <div class="container header-container">

        <!-- ЛОГОТИП -->
        <div class="logo-wrapper">
            <a href="{{ route('home') }}" class="logo" aria-label="Главная страница RentHouse">
                @if (Route::is('home'))
                    <h1 class="logo-text">{{ $siteName }}</h1>
                @else
                    <span class="logo-text">{{ $siteName }}</span>
                @endif
            </a>
        </div>

        <!-- Основная навигация -->
        <nav class="main-nav" aria-label="Основное меню навигации">
            <a href="{{ route('home') }}"
               class="nav-link {{ Route::is('home') ? 'active' : '' }}">
                Главная
            </a>
            <a href="{{ route('catalog') }}"
               class="nav-link {{ Route::is('catalog') ? 'active' : '' }}">
                Каталог
            </a>
            <a href="{{ route('how-it-works') }}"
               class="nav-link {{ Route::is('how-it-works') ? 'active' : '' }}">
                Как это работает
            </a>
            <a href="{{ route('for-owners') }}"
               class="nav-link {{ Route::is('for-owners') ? 'active' : '' }}">
                Для владельцев
            </a>
        </nav>

        <!-- Блок действий -->
        <div class="header-actions" role="group" aria-label="Действия пользователя">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="btn btn-outline"
                       aria-label="Личный кабинет">
                        Личный кабинет
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="btn btn-outline"
                       aria-label="Войти">
                        Войти
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn btn-primary"
                           aria-label="Разместить объявление">
                            Разместить объявление
                        </a>
                    @endif
                @endauth
            @else
                <!-- Заглушка -->
                <a href="#" class="btn btn-outline">Войти</a>
                <a href="#" class="btn btn-primary">Разместить объявление</a>
            @endif
        </div>

        <!-- Мобильная кнопка меню -->
        <!-- <button class="mobile-menu-button"
                aria-label="Открыть меню"
                aria-expanded="false"
                aria-controls="mobile-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button> -->

    </div>
</header>
