<?php

Route::get('/', 'PagesController@index');
Route::get('/Prolog', 'PagesController@prolog');
Route::get('/MP_Neuron', 'PagesController@mp_neuron');

Route::get('/faculty', 'FacultysController@index');
Route::post('faculty/store', 'FacultysController@store');

Route::resource('/posts', 'PostsController');

Route::get('/reports', 'ReportsController@index');

Route::get('/applicationReports', 'YearApplicationsController@index');

Route::get('/editReport/{id}', 'PostsController@edit');
Route::put('/reportUpdate/{id}','PostsController@update');
Route::get('/downloadReport/{id}', 'PdfsController@downloadPdf');
Route::get('/report-delete/{id}','PostsController@destroy');

// Faculty
Route::get('/editFaculty/{id}', 'FacultysController@edit');
Route::put('/updateFaculty/{id}','FacultysController@update');
Route::get('/deleteFaculty/{id}','FacultysController@destroy');
Route::get('GetSubCatAgainstMainCatEdit/{id}', 'FacultysController@GetSubCatAgainstMainCatEdit');


// pdf generator
Route::get('dpdf', 'PdfsController@dRPDFgenerator');
Route::get('bpdf', 'PdfsController@bRPDFgenerator');
Route::get('/spdf', 'PdfsController@sRPDFgenerator');
Route::get('ywpdf', 'PdfsController@ywRPDFgenerator');


Route::resource('customsearch', 'CustomSearchController');

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


