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
    return view('page.frontpage');
});

Route::post('/maps','LocationController@search');

Route::get('/jasaprint', function(){
	return view('page.JasaPrint');
});

Route::get('/detailproduk', function(){
	return view('page.DetailProduk');
});

Route::get('/notification', function(){
	return view('page.NotifAfterRegister');
});

Route::post('/register', 'AuthController@register');
Route::post('/login','AuthController@login');
Route::post('/logout','AuthController@logout');
Route::get('/payment', function(){
	return view('page.payment');
});

Route::get('/transaksi',function(){
	return view('page.transaksi');
});

Route::get('/history',function(){
	return view('page.HistoryTransaksi');
});

Route::get('/dashboard/home', function(){
	return view('page.dashboard.home');
});

Route::get('/dashboard/transaksi', function(){
	return view('page.dashboard.transaksi');
});

Route::get('/dashboard/produk', function(){
	return view('page.dashboard.produk');
});

Route::get('/dashboard/produkadd', function(){
	return view('page.dashboard.AddProduk');
});

