<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class CacheController extends Controller
{
    public function clearAllCaches()
    {
        // Clear application cache
        Artisan::call('cache:clear');

        // Clear route cache
        Artisan::call('route:clear');

        // Clear configuration cache
        Artisan::call('config:clear');

        // Clear view cache
        Artisan::call('view:clear');

        // Clear compiled class file cache
        Artisan::call('clear-compiled');

        // Clear the session data
        Session::flush();

        return 'All caches and session data have been cleared.';
    }
}
