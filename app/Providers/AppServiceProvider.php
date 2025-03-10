<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);

        Inertia::share([
            'auth' => [
                'user' => Auth::check() ? [
                    'id' => Auth::user()->id,
                    'name' => Auth::user()->name,
                    'roles' => ['admin'], // Get assigned roles
                    // 'permissions' => Auth::user()->getAllPermissions()->pluck('name'), // Get all permissions
                ] : null,
            ],
        ]);
    }
}
