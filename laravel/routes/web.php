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
Route::post('excelHotel', 'App\Http\Controllers\UploadExcel@excelHotel')->name('excelHotel');
Route::post('excelHistorial', 'App\Http\Controllers\UploadExcel@excelHistorial')->name('excelHistorial');
Route::post('excelCliente', 'App\Http\Controllers\UploadExcel@excelCliente')->name('excelCliente');
Route::get('/', function () {
    return view('welcome');
});
