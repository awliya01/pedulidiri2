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

Route::group(['middleware' => ['auth', 'revalidate']], function () {
    //Route Perjalanan
    Route::get('/diri', 'PerjalananController@index')->name('perjalanan.data');
    Route::get('/diri/create', 'PerjalananController@create');
    Route::post('/diri/store', 'PerjalananController@store');
    Route::get('/diri/destroy/{id_perjalanan}', 'PerjalananController@destroy');


    //Route User
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::put('/user/update/{id}', 'UserController@update');
    Route::get('/user/show/{id}', 'UserController@show');
});

Route::group(['middleware' => ['auth', 'role:admin', 'revalidate']], function () {
    Route::get('/user', 'UserController@index');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/detail/{id}', 'UserController@detail');
    Route::get('/user/generate-pdf', 'UserController@generatePDF');
    Route::get('/user/delete/{id}', 'UserController@destroy');
});


Auth::routes();
Route::get('/logout', 'LoginController@logout')->name('logout1');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/p', function () {
    return view('template.app');
});
