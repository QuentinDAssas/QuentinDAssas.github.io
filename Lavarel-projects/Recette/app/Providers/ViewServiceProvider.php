<?php

namespace App\Providers;

use App\Models\Ingredient;
use Illuminate\Support\Facades\View;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using closure based composers...
        View::composer('recipes.create', function ($view) {
            $view->with('ingredients', Ingredient::all());
        });
    }
}
