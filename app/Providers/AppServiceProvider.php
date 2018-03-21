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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		//Wherever the interface is injected (controllers) the repository gets injected instead.
		//Don't have to update controller code if decide to later swap out the orm or the db.
		//Update bind statement here with newly created repository (implementation) - brett.
		$this->app->bind('App\Interfaces\AssetsInterface', 'App\Repositories\AssetsRepository');
    }
}
