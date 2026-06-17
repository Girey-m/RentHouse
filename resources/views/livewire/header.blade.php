<header>
    <div class="container header-container">

        <!-- ЛОГОТИП -->
        <div class="logo-wrapper" aria-label="Главная страница RentHouse">
            <a href="{{ route('home') }}" class="logo" >
                @if ($isHome)
                    <h1 class="logo-text" x-init="console.log('created')">{{ $siteName }}</h1>
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

        <!-- Поиск -->
        <div class="header-search" style="position: relative;">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Поиск жилья: город, район, метро..."
                class="search-input"
            >

            @if ($this->searchResults)
                <div class="search-results-dropdown">
                    @foreach ($this->searchResults as $result)
                        <a href="#" class="search-result-item">
                            <div class="result-title">{{ $result['title'] }}</div>
                            <div class="result-address">{{ $result['address'] }}</div>
                            <div class="result-price">{{ $result['price'] }}</div>
                        </a>
                    @endforeach
                </div>
            @elseif (mb_strlen($search ?? '') >= 3)
                <div class="search-results-dropdown">
                    <div style="padding: 12px; color: #666; font-style: italic;">
                        Ничего не найдено по запросу "{{ $search }}"
                    </div>
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
        <div>
            Route check:
            {{ $isHome }}
        </div>
    </div>
</header>
