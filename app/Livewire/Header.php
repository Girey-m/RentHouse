<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

class Header extends Component
{
    public string $siteName;
    public string $search = '';

    public bool $isHome;

    private array $searchResultsCache = [];

    public function mount()
    {
            $this->siteName = config('app.name');
            $this->isHome = request()->routeIs('home');
    }

    public function updatedSearch()
    {
        $this->searchResultsCache = [];
    }

    #[Computed]
    public function searchResults()
    {
        if (mb_strlen($this->search) < 3) {
            return [];
        }

        if (!empty($this->searchResultsCache)) {
            return $this->searchResultsCache;
        }

        $allProperties = [
            ['id' => 1, 'title' => '1-комнатная квартира в центре', 'address' => 'Москва, Тверская ул., 12', 'price' => '45 000 ₽'],
            ['id' => 2, 'title' => 'Студия у метро', 'address' => 'Москва, Красносельская, 45', 'price' => '38 000 ₽'],
            ['id' => 3, 'title' => 'Дом в Подмосковье', 'address' => 'Московская обл., Красногорск', 'price' => '90 000 ₽'],
            ['id' => 4, 'title' => '2-комнатная квартира рядом с парком', 'address' => 'Москва, Сокольники', 'price' => '65 000 ₽'],
            ['id' => 5, 'title' => 'Квартира в новостройке', 'address' => 'Москва, район Марьина Роща', 'price' => '55 000 ₽'],
        ];

        $searchText = mb_strtolower($this->search);

        $filtered = array_filter($allProperties, function ($item) use ($searchText) {
            $itemText = mb_strtolower($item['title'] . ' ' . $item['address']);
            return str_contains($itemText, $searchText);
        });

        $this->searchResultsCache = array_values($filtered);

        return $this->searchResultsCache;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
