<?php

namespace Hadefication\Kuding\Support\Helpers\Mana;

use Illuminate\Support\Facades\Facade;

class ManaFacade extends Facade
{

    /**
     * Get facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'kuding_mana_helper';
    }

}
