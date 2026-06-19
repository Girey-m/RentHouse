<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NavigationService;

class NavigationController extends Controller
{
    public function index(NavigationService $navigationService)
    {
        return response()->json([
            'success' => true,
            'data'    => $navigationService->getActiveItemsForApi(),
        ]);
    }
}
