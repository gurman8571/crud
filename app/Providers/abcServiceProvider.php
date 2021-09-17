<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\abc\abc;
class abcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('abc',function() {
            return new abc();
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
