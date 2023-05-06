<?php

use Illuminate\Support\Facades\Route;

Route::get('/transaction', function () {
    return transaction(function(){return 1;});
});
Route::get('/test', function() {
    return view('test');
})->name('test');
Route::get('/send', function() {
    flash('опаньки');
    return redirect()->route('test');
});


Route::get('/', function () {
    return redirect(\route('sql.index'));
})->name('home');

    $types = ['sql', 'git', 'phpString', 'phpArray', 'regexp', 'docker', 'laravel', 'linux', 'apache', 'nginx'];


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







