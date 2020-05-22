<?php

namespace Acme\NumberRange;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FilterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('NumberRange', __DIR__.'/../dist/js/filter.js');
            Nova::style('NumberRange', __DIR__.'/../dist/css/filter.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return voidyes
     */
    public function register()
    {
        //
    }
}
