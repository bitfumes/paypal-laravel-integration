<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/execute-payment', 'PaymentController@execute');
Route::post('/create-payment', 'PaymentController@create')->name('create-payment');
