<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::if('can', function ($expression,$type='admin') {
            if ($type == 'admin')
                $expression = (strpos($expression, '_'))?$expression:$expression.'_'.request()->segment(2);
                return  auth('admin')->user()->hasAccess(str_replace('-','_',$expression));
           
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('adminlog', 'App\Helpers\AdminLogWriter');
    }
}
