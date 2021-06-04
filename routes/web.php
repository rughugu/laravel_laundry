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

Route::get('/index', function () {
    return view('dashboard');
});

Route::get('/', 'PegawaiController@login');

Route::post('/login/proses','PegawaiController@proses');

Route::get('/pegawai', 'PegawaiController@pegawai'); 

Route::get('/katmesin','DataBarangController@katmesin');

Route::get('tambahkatmesin','DataBarangController@tambahkatmesin');

Route::post('tambahkatmesin/mesin','DataBarangController@mesin');



Route::get('/unitmesin','DataBarangController@unitmesin');

Route::get('unitmesin','DataBarangController@unitmesin');

Route::get('/katbarang','DataBarangController@katbarang');

Route::get('katbarang','DataBarangController@katbarang');

Route::get('/daftarbarang','DataBarangController@daftarbarang');

Route::get('daftarbarang','DataBarangController@daftarbarang');

Route::get('/unitkerja', 'PegawaiController@unitkerja');

Route::get('unitkerja','PegawaiController@unitkerja');


Route::get('/tambah', 'DataBarangController@tambah');

Route::get('data', 'DataBarangController@index');

Route::post('tambah/laundry', 'DataBarangController@laundry');

Route::get('data/edit/{id}','DataBarangController@edit');

Route::post('data/update','DataBarangController@update');

Route::get('data/hapus/{id}','DataBarangController@hapus');



