<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;

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
    return view('tampilan');
});

Route::get('/home', function () {
    return view('home');
});

// login
Route::get('/login', function () {
    return view('login');
});

// Route::get('/login', 'App\Http\Controllers\LoginController@loginindex');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@loginindex')->name('postlogin');


Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

// register
// Route::get('/register', 'App\Http\Controllers\RegisterController@store');

// Route::post('/register', 'App\Http\Controllers\RegisterController@store');

Route::get('/register', 'App\Http\Controllers\LoginController@regisindex');

Route::post('/register', 'App\Http\Controllers\LoginController@store');

// barang 
Route::get('/barang', 'App\Http\Controllers\BarangController@index');

Route::get('/cetakbarang', 'App\Http\Controllers\BarangController@cetak');

Route::get('/tambahbarang','App\Http\Controllers\BarangController@create');

Route::post('/barang', 'App\Http\Controllers\BarangController@store');

Route::get('/editbarang/{id}', 'App\Http\Controllers\BarangController@edit');

Route::post('/barang/edit', 'App\Http\Controllers\BarangController@update');

Route::get('/barang/destroy/{id}', 'App\Http\Controllers\BarangController@destroy');

// barangbaru
Route::get('/barangbaru', 'App\Http\Controllers\BarangbaruController@index');

Route::get('/cetakbarangbaru', 'App\Http\Controllers\BarangbaruController@cetak');

Route::get('/tambahbarangbaru','App\Http\Controllers\BarangbaruController@create');

Route::post('/barangbaru', 'App\Http\Controllers\BarangbaruController@store');

Route::get('/barangbaruedit/{id}', 'App\Http\Controllers\BarangbaruController@edit');

Route::post('/barangbaru/edit', 'App\Http\Controllers\BarangbaruController@update');

Route::get('/barangbaru/destroy/{id}', 'App\Http\Controllers\BarangbaruController@destroy');

// kembali
Route::get('/kembali', 'App\Http\Controllers\KembaliController@index');

Route::get('/cetakkembali', 'App\Http\Controllers\KembaliController@cetak');

Route::get('/tambahdatakembali','App\Http\Controllers\KembaliController@create');

Route::post('/kembali', 'App\Http\Controllers\KembaliController@store');

Route::get('/editkembali/{id}', 'App\Http\Controllers\KembaliController@edit');

Route::post('/kembali/edit', 'App\Http\Controllers\KembaliController@update');

Route::get('/kembali/destroy/{id}', 'App\Http\Controllers\KembaliController@destroy');

// detail kembali
Route::get('/detailkembali', 'App\Http\Controllers\DetailKembaliController@index');

Route::get('/cetakdetailkembali', 'App\Http\Controllers\DetailKembaliController@cetak');

Route::get('/tambahdetailkembali','App\Http\Controllers\DetailKembaliController@create');

Route::post('/detailkembali', 'App\Http\Controllers\DetailKembaliController@store');

Route::get('/editdetailkembali/{id}', 'App\Http\Controllers\DetailKembaliController@edit');

Route::post('/detailkembali/edit', 'App\Http\Controllers\DetailKembaliController@update');

Route::get('/detailkembali/destroy/{id}', 'App\Http\Controllers\DetailKembaliController@destroy');

// pinjam
Route::get('/pinjam', 'App\Http\Controllers\PinjamController@index');

Route::get('/cetakpinjam', 'App\Http\Controllers\PinjamController@cetak');

Route::get('/tambahdatapinjam', 'App\Http\Controllers\PinjamController@create');

Route::post('/pinjam', 'App\Http\Controllers\PinjamController@store');

Route::get('/editpinjam/{id}', 'App\Http\Controllers\PinjamController@edit');

Route::post('/pinjam/edit', 'App\Http\Controllers\PinjamController@update');

Route::get('/pinjam/destroy/{id}', 'App\Http\Controllers\PinjamController@destroy');

// detail pinjam
Route::get('/detailpinjam', 'App\Http\Controllers\DetailPinjamController@index');

Route::get('/cetakdetailpinjam', 'App\Http\Controllers\DetailPinjamController@cetak');

Route::get('/tambahdetailpinjam', 'App\Http\Controllers\DetailPinjamController@create');

Route::post('/detailpinjam', 'App\Http\Controllers\DetailPinjamController@store');

Route::get('/editdetailpinjam/{id}', 'App\Http\Controllers\DetailPinjamController@edit');

Route::post('/detailpinjam/edit', 'App\Http\Controllers\DetailPinjamController@update');

Route::get('/detailpinjam/destroy/{id}', 'App\Http\Controllers\DetailPinjamController@destroy');

// temppinjam
Route::get('/temppinjam', 'App\Http\Controllers\TempController@index');

Route::get('/cetaktemppinjam', 'App\Http\Controllers\TempController@cetak');

Route::get('/tambahtemppinjam', 'App\Http\Controllers\TempController@create');

Route::post('/temppinjam', 'App\Http\Controllers\TempController@store');

Route::get('/edittemppinjam/{id}', 'App\Http\Controllers\TempController@edit');

Route::post('/temppinjam/edit', 'App\Http\Controllers\TempController@update');

Route::get('/temppinjam/destroy/{id}', 'App\Http\Controllers\TempController@destroy');

// member
Route::get('/member', 'App\Http\Controllers\MemberController@index');

Route::get('/cetakmember', 'App\Http\Controllers\MemberController@cetak');

Route::get('/tambahmember', 'App\Http\Controllers\MemberController@create');

Route::post('/member', 'App\Http\Controllers\MemberController@store');

Route::get('/editmember/{id}', 'App\Http\Controllers\MemberController@edit');

Route::post('/member/edit', 'App\Http\Controllers\MemberController@update');

Route::get('/member/destroy/{id}', 'App\Http\Controllers\MemberController@destroy');