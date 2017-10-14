<?php

<<<<<<< HEAD
namespace App\Providers;
=======
namespace Furbook\Providers;
>>>>>>> develop

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
<<<<<<< HEAD
=======
         //View::composer('breeds', 'Furbook\Http\ViewComposers\CatFormComposer');
>>>>>>> develop
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
