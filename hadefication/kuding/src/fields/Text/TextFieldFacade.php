<?php

namespace Hadefication\Kuding\Fields\Text;

use Illuminate\Support\Facades\Facade;


class TextFieldFacade extends Facade
{
    /**
     * Get facade accessor
     *
     * @return string
     * @author hadefication
     */
    protected static function getFacadeAccessor()
    {
        return 'kuding_text_field';
    }
}
