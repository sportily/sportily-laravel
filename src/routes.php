<?php

# ensure that the sportily api client is correctly configured.
Route::group(['middleware' => 'sportily.token'], function() {

    # handle incoming authentication tokens.
    Route::get('callback', 'Sportily\Laravel\Controllers\AuthController@callback');

});
