<?php

namespace Hadefication\Kuding\Fields\String;

use use Illuminate\Support\ServiceProvider;

class StringField extends ServiceProvider
{

    /**
     * Register package
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('kuding_string_field', function () {
            return $this->app->make('Hadefication\Kuding\Fields\String\StringField');
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
