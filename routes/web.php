<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(\route('sql.index'));
});

Route::controller(\App\Http\Controllers\SqlController::class)->group(function() {

    Route::get('sql', 'index')->name('sql.index');
    Route::post('sql', 'store')->name('sql.store');
    Route::get('sql/{sql}/edit', 'edit')->name('sql.edit');
    Route::patch('sql/{sql}', 'update')->name('sql.update');
    Route::get('sql/{sql}/delete', 'delete')->name('sql.delete');

    Route::get('sql/{sql}/up', 'up')->name('sql.up');
    Route::get('sql/{sql}/down', 'down')->name('sql.down');
});

Route::controller(\App\Http\Controllers\PhpController::class)->group(function() {

    Route::get('php', 'index')->name('php.index');
    Route::post('php', 'store')->name('php.store');
    Route::get('php/{php}/edit', 'edit')->name('php.edit');
    Route::patch('php/{php}', 'update')->name('php.update');
    Route::get('php/{php}/delete', 'delete')->name('php.delete');

    Route::get('php/{php}/up', 'up')->name('php.up');
    Route::get('php/{php}/down', 'down')->name('php.down');
});



