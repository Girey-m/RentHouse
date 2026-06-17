<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    /** Название сайта */
    public string $siteName;

    /**
     * Главное свойство поиска
     * То, что пользователь вводит в поле
     */
    public string $search = '';

    /**
     * Результаты поиска (пока фейковые)
     */
    public array $searchResults = [];

    /**
     * Выполняется один раз при загрузке компонента
     */
    public function mount()
    {
        $this->siteName = config('app.name');
    }

    /**
     * Этот метод будет вызываться автоматически при изменении $search
     * (благодаря wire:model.live)
     */
    /**
     * Этот метод автоматически вызывается при каждом изменении $search
     */
    /**
     * Вызывается автоматически каждый раз, когда меняется $search
     */
    public function updatedSearch()
    {
        // Используем mb_strlen для корректной работы с русским текстом
        if (mb_strlen($this->search) < 3) {
            $this->searchResults = [];
            return;
        }

        // === ИМИТАЦИЯ БАЗЫ ДАННЫХ ===
        $allProperties = [
            [
                'id' => 1,
                'title' => '1-комнатная квартира в центре',
                'address' => 'Москва, Тверская ул., 12',
                'price' => '45 000 ₽'
            ],
            [
                'id' => 2,
                'title' => 'Студия у метро',
                'address' => 'Москва, Красносельская, 45',
                'price' => '38 000 ₽'
            ],
            [
                'id' => 3,
                'title' => 'Дом в Подмосковье',
                'address' => 'Московская обл., Красногорск',
                'price' => '90 000 ₽'
            ],
            [
                'id' => 4,
                'title' => '2-комнатная квартира рядом с парком',
                'address' => 'Москва, Сокольники',
                'price' => '65 000 ₽'
            ],
            [
                'id' => 5,
                'title' => 'Квартира в новостройке',
                'address' => 'Москва, район Марьина Роща',
                'price' => '55 000 ₽'
            ],
        ];

        // Фильтрация
        $searchText = mb_strtolower($this->search);

        $this->searchResults = array_filter($allProperties, function ($item) use ($searchText) {
            $itemText = mb_strtolower($item['title'] . ' ' . $item['address']);
            return str_contains($itemText, $searchText);
        });

        // Преобразуем обратно в нормальный массив
        $this->searchResults = array_values($this->searchResults);
    }

    public function render()
    {
        return view('livewire.header');
    }
}
