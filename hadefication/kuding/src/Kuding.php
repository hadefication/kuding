<?php

namespace Hadefication\Kuding;

use Hadefication\Kuding\Lib\Traits\HelpersTrait;

use Route;

class Kuding
{
    use HelpersTrait;

    public function routes()
    {
        Route::group([
            'prefix' => config('kuding.site')
        ], function() {

            Route::get('', function() {

                return view('kuding::pages.welcome');

            });

        });
    }
}
