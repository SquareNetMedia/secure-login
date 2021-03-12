<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
});

Route::get('/a', function () {
    return secure - login::config.url;
});
