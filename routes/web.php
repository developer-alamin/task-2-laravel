<?php

use App\Http\Controllers\ExcelImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/import',[ExcelImportController::class,'import'])->name('import');
Route::get('/failed-imports/download', [ExcelImportController::class, 'generateFailedRowsExcel'])->name('download_failed');

 
Route::resource('products', ProductController::class);