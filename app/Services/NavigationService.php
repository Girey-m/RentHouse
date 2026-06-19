<?php

namespace App\Services;

use App\Models\NavigationItem;
use Illuminate\Support\Collection;

class NavigationService
{
    /**
     * Получает активные пункты меню.
     * Можно использовать как в веб, так и в API.
     */
    public function getActiveItems(): Collection
    {
        return NavigationItem::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['id', 'label', 'route_name']);
    }

    /**
     * Возвращает данные в формате, удобном для API/JSON.
     */
    public function getActiveItemsForApi(): array
    {
        return $this->getActiveItems()
            ->map(fn ($item) => [
                'id'         => $item->id,
                'label'      => $item->label,
                'route_name' => $item->route_name,
                'url'        => route($item->route_name), // сразу формируем полный URL
            ])
            ->toArray();
    }
}
