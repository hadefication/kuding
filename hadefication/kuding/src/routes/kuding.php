<?php

Route::group([
    'prefix' => config('kuding.cpanel')
], function() {


    Route::get('', function() {
        return view('kuding::pages.cpanel.dashboard');
    });


});
