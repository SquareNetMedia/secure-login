<?php
Route::group(['middleware' => 'web'], function () {

    
    });
    
    Route::get('/a', function () {
        return "this is test route";
    });
