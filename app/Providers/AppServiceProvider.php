<?php
namespace App\Providers;

use App\Livewire\FilterShop;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        

        Paginator::useBootstrapFive();
        //
        Authenticate::redirectUsing(function ($request) {
            return route("login");
        });
    }
}
