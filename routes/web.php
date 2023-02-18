<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return redirect(\route('sql.index'));
//});

Route::controller(\App\Http\Controllers\SqlController::class)->group(function () {

    Route::get('sql', 'index')->name('sql.index');
    Route::post('sql', 'store')->name('sql.store');
    Route::get('sql/{sql}/edit', 'edit')->name('sql.edit');
    Route::patch('sql/{sql}', 'update')->name('sql.update');
    Route::get('sql/{sql}/delete', 'delete')->name('sql.delete');

    Route::get('sql/{sql}/up', 'up')->name('sql.up');
    Route::get('sql/{sql}/down', 'down')->name('sql.down');
});




    $types = ['git'];


    foreach ($types as $type) {

        $type_uc = ucfirst($type);
        $class_name = "\\App\Http\Controllers\\" . $type_uc . "Controller";

        Route::get($type, [$class_name, 'index'])->name("$type.index");
        Route::post($type, [$class_name, 'store'])->name("$type.store");
        Route::get($type . '/{' . $type. '}/edit', [$class_name, 'edit'])->name("$type.edit");
        Route::patch($type . '/{' . $type . '}', [$class_name, 'update'])->name("$type.update");
        Route::get($type . '/{' . $type . '}/delete', [$class_name, 'delete'])->name("$type.delete");

        Route::get($type . '/{' . $type . '}/up', [$class_name, 'up'])->name("$type.up");
        Route::get($type . '/{' . $type . '}/down', [$class_name, 'down'])->name("$type.down");


    }


//    Route::controller($class_name)->group(function () use ($type) {
//
//        Route::get($type, 'index')->name('php.index');
//        Route::post($type, 'store')->name("$type.store");
//        Route::get("$type/{$type}/edit", 'edit')->name("$type.edit");
//        Route::patch("$type/{$type}", 'update')->name("$type.update");
//        Route::get("$type/{$type}/delete", 'delete')->name("$type.delete");
//
//        Route::get("$type/{$type}/up", 'up')->name("$type.up");
//        Route::get("$type/{$type}/down", 'down')->name("$type.down");
//    });






