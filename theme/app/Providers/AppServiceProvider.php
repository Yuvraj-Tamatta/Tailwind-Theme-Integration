<?php

namespace App\Providers;

use App\Services\demoMenu;
use App\Services\MenuService;
use App\Services\practice;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::share('menu', MenuService::mainMenu());
        View::share('dragmenu', demoMenu::menu());
        View::share('practice', practice::practiceMenu());
    }
}
