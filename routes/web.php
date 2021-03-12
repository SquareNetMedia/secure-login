<?php

Route::group(['middleware' => 'web'], function () {
});

Route::get('/'config('config.url'), function () {
    return 'this is test route';
});
