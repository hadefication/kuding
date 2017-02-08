<?php

Route::group([
    'prefix' => config('kuding.prefix')
], function() {


    Route::get('', function() {
        return view('kuding::pages.welcome');
    });


});
