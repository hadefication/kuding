<?php

namespace Hadefication\Kuding;

use Hadefication\Kuding\Support\Traits\HelpersTrait;

use Route;

class Kuding
{
    use HelpersTrait;

    /**
     * Routes
     *
     * @return void
     */
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

    /**
     * Render content head UI
     *
     * @param  string $title                            the content head title
     * @param  array $menus                             the content menus
     * @return View
     */
    public function contentHead($title, $menus = [])
    {
        return view('kuding::themes.includes.content_head', compact('title', 'menus'));
    }
}
