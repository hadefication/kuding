<?php

namespace Hadefication\Kuding;

use Illuminate\Support\Facades\Facade;

class KudingFacade extends Facade
{

    /**
     * Get facade accessor
     *
     * @return string
     * @author hadefication
     */
    protected static function getFacadeAccessor()
    {
        return 'facade';
    }
    
}
