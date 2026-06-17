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

        <!-- Место для поиска (добавим позже) -->
<!-- Поиск -->
<div class="header-search" style="position: relative;">
    <input
        type="text"
        wire:model.live="search"
        wire:model.debounce.300ms="search"
        placeholder="Поиск жилья: город, район, метро..."
        class="search-input"
    >

    <!-- Выпадающий список результатов -->
    @if (!empty($searchResults))
        <div class="search-results-dropdown">
            @foreach ($searchResults as $result)
                <a href="#" class="search-result-item">
                    <div class="result-title">{{ $result['title'] }}</div>
                    <div class="result-address">{{ $result['address'] }}</div>
                    <div class="result-price">{{ $result['price'] }}</div>
                </a>
            @endforeach
        </div>
    @endif
</div>

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
    </div>
</header>
