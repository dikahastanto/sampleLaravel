<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/forminput', function () {
        return view('admin.inputpetani');
    })->name('forminputpetani');
    Route::post('/insertpetani', 'PetaniController@store')->name('insertPetani');
    // rut
    Route::get('/datarut', 'RUTController@index')->name('showRUT');

    // rdkk
    Route::get('/datardkk', 'RDKKController@index')->name('showRDKK');
    Route::get('/formInputRDKK', 'RDKKController@create')->name('formInputRDKK');
    Route::post('/inputrdkk', 'RDKKController@store')->name('inputRDKK');
    Route::get('/formeditrdkk/{id}', 'RDKKController@show')->name('formEditRDKK');
    Route::post('/updateRDKK/{id}', 'RDKKController@update')->name('updateRDKK');
    Route::get('/deleterdkk/{id}', 'RDKKController@destroy')->name('deleteRDKK');

    // forcasting
    Route::get('/forecastingpanen', 'ForecastingController@panen')->name('forecastingPanen');
    
});

