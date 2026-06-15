@extends('layouts.app')

@section('title', 'RentHouse — Аренда жилья')

@section('content')
    <main class="home-page">
        <div class="hero">
            <div class="container">
                <h1 class="hero-title">
                    Найди свой идеальный дом
                </h1>
                <p class="hero-subtitle">
                    Платформа для сдачи и аренды жилья. Просто, быстро, надёжно.
                </p>

                <div class="hero-search">
                    <!-- Поиск будет позже -->
                    <input type="text" placeholder="Куда хотите поехать?" class="search-input">
                    <button class="btn btn-primary">Найти жильё</button>
                </div>

                <div class="hero-stats">
                    <div>5000+ объявлений</div>
                    <div>120+ городов</div>
                    <div>98% довольных клиентов</div>
                </div>
            </div>
        </div>

        <!-- Остальной контент будет позже -->
        <div class="container" style="padding: 80px 20px; text-align: center; color: #666;">
            <h2>Здесь скоро появятся популярные объявления...</h2>
            <p>Мы активно работаем над проектом.</p>
        </div>
    </main>
@endsection
