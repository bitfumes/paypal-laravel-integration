<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/execute-payment', 'PaymentController@execute');
