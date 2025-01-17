<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return  void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            '*', 'App\Http\Controllers\ViewComposer'
        );
    }

    /**
     * Register the service provider.
     *
     * @return  void
     */
    public function register()
    {
        //
    }
}