<?php

namespace DevPac\Calculation;

use Illuminate\Support\ServiceProvider;

class CalculationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('DevPac\Calculation\App\Http\Controllers\CalculationController');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'calculation');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
    }
}
