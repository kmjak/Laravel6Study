<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class HelloServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'hello.index','App\Http\Composers\HelloComposer'
        );
    }
}
