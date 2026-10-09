<?php

namespace App\Providers;

use App\Repositories\Contracts\InternRepository;
use App\Services\Contracts\InternServiceInterface;
use App\Services\Implementations\InternService;
use EloquentInternRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            InternRepository::class,
            EloquentInternRepository::class
        );

        $this->app->bind(
            InternServiceInterface::class,
            InternService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
