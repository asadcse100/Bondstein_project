<?php

Route::group(['namespace' => 'Asad\CrudGenerate\Controllers', 'prefix' => 'crud'], function () {
    Route::get('/generateController/{name}', 'CrudController@generateController')->name('crud.generate');
});
