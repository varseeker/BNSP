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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/search-siswa', 'C_Siswa@cari');
Route::get('/search-transaksi', 'C_Transaksi@cari');

Route::get('/siswa', 'C_Siswa@index');
Route::get('/siswa/show/{siswa}', 'C_Siswa@show');
Route::get('/siswa/add', 'C_Siswa@create');
Route::post('/siswa', 'C_Siswa@store');
Route::get('/siswa/edit/{siswa}', 'C_Siswa@edit');
Route::patch('/siswa/edit/{siswa}', 'C_Siswa@update');
Route::delete('/siswa/show/{siswa}', 'C_Siswa@destroy');

Route::get('/transaksi', 'C_Transaksi@index');
Route::get('/transaksi/show/{transaksi}', 'C_Transaksi@show');
Route::get('/transaksi/add', 'C_Transaksi@create');
Route::post('/transaksi', 'C_Transaksi@store');
Route::get('/transaksi/edit/{transaksi}', 'C_Transaksi@edit');
Route::patch('/transaksi/edit/{transaksi}', 'C_Transaksi@update');
Route::delete('/transaksi/show/{transaksi}', 'C_Transaksi@destroy');