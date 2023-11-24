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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/entri', function () {
    return view('entri');
});
Route::get('/anggota', function () {
    return view('anggota_entri');
});
Route::get('/tim', function () {
    return view('tim_entri');
});
Route::get('/rekap_anggota', function () {
    return view('rekap_anggota');
});
Route::get('/rekap_detail_anggota', function () {
    return view('rekap_anggota_detail');
});
Route::get('/rekap_bangkom', function () {
    return view('rekap_bangkom');
});
Route::get('/jadwal_bangkom', function () {
    return view('jadwal_bangkom');
});
Route::get('/jadwal_bangkom_detail', function () {
    return view('jadwal_bangkom_detail');
});
