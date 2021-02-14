<?php

Route::get('/', 'PagesController@index');

Route::get('/Prolog', 'PagesController@prolog');


Route::get('/MP_Neuron', 'PagesController@mp_neuron');
Route::get('/MP_Neuron/Xor-Gate', 'PagesController@mp_neuron_xor');
Route::get('/MP_Neuron/Nand-Gate', 'PagesController@mp_neuron_nand');




// Login Admin
Route::get('/login', 'LoginController@index');
Route::post('/login/checklogin', 'LoginController@checklogin');
Route::get('login/successlogin', 'LoginController@successlogin');
Route::get('login/logout', 'LoginController@logout');

// Login Accountant
Route::get('/loginacc', 'AccountantController@index');
Route::post('/loginacc/checklogin', 'AccountantController@checklogin');
Route::get('loginacc/successlogin', 'AccountantController@successlogin');
Route::get('loginacc/logout', 'AccountantController@logout');


