<?php

namespace Hadefication\Kuding\Fields\String;

use Illuminate\Support\Facades\Facade;


class StringFieldFacade extends Facade
{
    /**
     * Get facade accessor
     *
     * @return string
     * @author hadefication
     */
    protected static function getFacadeAccessor()
    {
        return 'kuding_string_field';
    }
}
