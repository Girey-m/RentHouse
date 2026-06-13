<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */

    public string $siteName;
    public function __construct()
    {
        $this->siteName = config('app.name');

    //     dd([
    //     'config_app_name' => config('app.name'),
    //     'env_app_name'    => env('APP_NAME'),
    //     'siteName'        => $this->siteName
    // ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
