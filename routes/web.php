<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/execute-payment', 'PaymentController@execute');
Route::post('/create-payment', 'PaymentController@create')->name('create-payment');

Route::get('plan/create','SubscriptionController@createPlan');
Route::get('plan/list','SubscriptionController@listPlan');
Route::get('plan/{id}','SubscriptionController@showPlan');
Route::get('plan/{id}/activate','SubscriptionController@activatePlan');

Route::post('plan/{id}/agreement/create','SubscriptionController@createAgreement')->name('create-agreement');
Route::get('execute-agreement/{success}','SubscriptionController@executeAgreement');
