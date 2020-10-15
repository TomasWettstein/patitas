<?php

namespace App\Providers;

use App\Models\Categoria;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials.navbar', function ($view){
             $view->with('categorias', Categoria::all());
         });
    }
}
