<?php

Route::prefix(config('kuding.cpanel'))
        ->namespace('Hadefication\Kuding\Support\Http\Controllers')
        ->group(function() {

    Route::name('kuding.cpanel')->get('', 'DashboardController@dashboard');

    Route::prefix('contents')->group(function() {
        Route::name('kuding.cpanel.contents')->get('', 'ContentController@manage');
        Route::name('kuding.cpanel.contents.create')->get('create', 'ContentController@create');
    });
});
