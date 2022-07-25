<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TestimoniController@testimoni');

Route::get('/menu', 'MenuController@menu');

Route::get('/about', function () {
    return view('about');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    Route::get('dashboard', 'MenuController@counts');

    Route::get('fasilitas', 'FasilitasController@index');
    Route::get('fasilitas/tambah', 'FasilitasController@indexTambah');
    Route::post('fasilitas/tambah/store', 'FasilitasController@TambahStore');
    Route::get('fasilitas/edit/{id}', 'FasilitasController@indexEdit');
    Route::patch('fasilitas/edit/{id}', 'FasilitasController@Editstore');
    Route::delete('fasilitas/{id}', 'FasilitasController@destroy');

    Route::get('testimoni', 'TestimoniController@index');
    Route::get('testimoni/tambah', 'TestimoniController@indexTambah');
    Route::post('testimoni/tambah/store', 'TestimoniController@TambahStore');
    Route::get('testimoni/edit/{id}', 'TestimoniController@indexEdit');
    Route::patch('testimoni/edit/{id}', 'TestimoniController@Editstore');
    Route::delete('testimoni/{id}', 'TestimoniController@destroy');

    Route::get('menus', 'MenuController@index');
    Route::get('menus/tambah', 'MenuController@indexTambah');
    Route::post('menus/store', 'MenuController@store');
    Route::get('menus/edit/{id}', 'MenuController@edit');
    Route::patch('menus/edit/{id}', 'MenuController@update');
    Route::delete('menus/{id}', 'MenuController@destroy');

    Route::get('settings', 'PengaturanController@index');
    Route::post('settings', 'PengaturanController@update');
});