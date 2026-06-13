<header>
    <div class="header-container">
        <!-- Логотип -->
        <div>
            <a href="/" class="logo">RentHouse</a>
        </div>

        <!-- Навигация -->
        <nav>
            <a href="#">Каталог</a>
            <a href="#">Как это работает</a>
            <a href="#">Для владельцев</a>
        </nav>

        <!-- Кнопки -->
        <div class="header-actions">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-outline">Личный кабинет</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline">Войти</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Разместить объявление</a>
                    @endif
                @endauth
            @else
                {{-- Заглушка --}}
                <a href="#" class="btn btn-outline">Войти</a>
                <a href="#" class="btn btn-primary">Разместить объявление</a>
            @endif
        </div>
    </div>
</header>
