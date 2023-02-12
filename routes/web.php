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
    return redirect(\route('sqls.index'));
});

Route::resource('phps', \App\Http\Controllers\PhpController::class);

Route::resource('sqls', \App\Http\Controllers\SqlController::class);
Route::get('sqls/{sql}/up', [\App\Http\Controllers\SqlController::class, 'up'])->name('sqls.up');
Route::get('sqls/{sql}/down', [\App\Http\Controllers\SqlController::class, 'down'])->name('sqls.down');
Route::get('sqls/{sql}/destroy', [\App\Http\Controllers\SqlController::class, 'destroy'])->name('sqls.delete');
