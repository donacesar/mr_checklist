<?php

use App\Http\Controllers\SqlController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(\route('sql.index'));
});

Route::controller(SqlController::class)->group(function() {

    Route::get('sql', 'index')->name('sql.index');
    Route::post('sql', 'store')->name('sql.store');
    Route::get('sql/{sql}/edit', 'edit')->name('sql.edit');
    Route::patch('sql/{sql}', 'update')->name('sql.update');
    Route::get('sql/{sql}/delete', 'delete')->name('sql.delete');

    Route::get('sql/{sql}/up', 'up')->name('sql.up');
    Route::get('sql/{sql}/down', 'down')->name('sql.down');
});





