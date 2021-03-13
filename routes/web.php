<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
});

<<<<<<< HEAD

Route::group(array('prefix' => Config::get('secure-login.url')), function ()
{

   Route::get('/a', function () {
      
      //check if the config file is loaded - not sure if this is required now
      if (is_null(config('secure-login'))){
         return ('Please publish the config file by running ' .
         'php artisan vendor:publish --tag=secure-login-config\'');
      }

      return config('secure-login.url');

   });

});
=======
Route::get('/a', function () {
    return secure - login::config.url;
});
>>>>>>> 3d4cae404397ad5051979476cfa84528345f8e36
