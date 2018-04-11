<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
			Resource::withoutWrapping();
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
			//$this->app->bind('App\Interfaces\AssetsInterface', 'App\Repositories\AssetsRepository');
			$this->app->bind('App\Interfaces\AssetsInterface', 'App\Repositories\AssetsRepositoryJSON');
			$this->app->bind('App\Interfaces\CategoriesInterface', 'App\Repositories\CategoriesRepository');
    }
}
