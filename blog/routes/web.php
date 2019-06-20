<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'blogController@index');