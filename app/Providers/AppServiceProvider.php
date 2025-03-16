<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use App\Repositories\CategoriesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CategoriesRepositoryInterface::class, CategoriesRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
