<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app('view')->composer('layouts',function($view){
            $action = app('request')->route()->gatAction();
            $controller = class_basename($action['controller']);
            list($controller, $action) = explode('@', $controller);
            $view->with(compact('controller','action'));
        });
        //
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
