<?php

namespace Hadefication\Kuding;

use Route;

class Kuding
{

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
