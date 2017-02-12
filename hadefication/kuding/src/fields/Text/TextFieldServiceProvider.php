<?php

namespace Hadefication\Kuding\Fields\Text;

use use Illuminate\Support\ServiceProvider;

class TextField extends ServiceProvider
{

    /**
     * Register package
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('kuding_text_field', function () {
            return $this->app->make('Hadefication\Kuding\Fields\Text\TextField');
        });
    }

    /**
     * Boot package
     *
     * @return void
     */
    public function boot()
    {

    }

}
