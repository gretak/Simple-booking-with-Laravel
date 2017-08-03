<?php

Route::get('/','BookingController@index');
Route::get('/company','BookingController@company');
Route::get('/client','BookingController@client');
Route::get('/thankyou','BookingController@thankyou');

Route::post('/bookings','BookingController@show');