<?php

Route::group(['namespace' => 'Lwj\Command\Http\Controllers'], function(){
    Route::get('lwj/command', 'CommandController@index');
});
