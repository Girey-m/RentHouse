<?php

namespace App\View\Components;

use App\Services\NavigationService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public string $siteName;
    public $navigationItems;

    public function __construct(NavigationService $navigationService)
    {
        $this->siteName = config('app.name');
        $this->navigationItems = $navigationService->getActiveItems();
    }

    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
