<?php

namespace Hadefication\Kuding;

use Illuminate\Support\ServiceProvider;

class KudingServiceProvider extends ServiceProvider
{
    /**
     * Register
     *
     * @return void
     * @author hadefication
     */
    public function register()
    {
        $this->app->singleton('kuding', function () {
            return $this->app->make('Hadefication\Kuding\Kuding');
        });
    }
    
}
