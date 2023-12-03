<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return redirect(\route('sql.index')); })->name('home');
Route::post('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search.index');


//Route::get('/dashboard', function () {
//    return view('dashboard'); })
//    ->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';


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
