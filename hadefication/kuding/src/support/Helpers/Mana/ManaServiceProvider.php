<?php

namespace Hadefication\Kuding\Support\Helpers\Mana;

use Illuminate\Support\ServiceProvider;

class ManaServiceProvider extends ServiceProvider
{

    /**
     * Register helper
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('kuding_mana_helper', function () {
            return $this->app->make('Hadefication\Kuding\Support\Helpers\Mana\Mana');
        });
    }

    /**
     * Boot helper
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
