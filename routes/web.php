<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['User','auth'])->group(function () {
/* User auth */
Route::get('/userprofile', [App\Http\Controllers\UserController::class, 'index'])->name('userprofile');
Route::get('/wordSearch', [App\Http\Controllers\SearchController::class, 'store'])->name('wordSearch');
Route::post('/AddLines', [App\Http\Controllers\UserController::class, 'store'])->name('Add-lines');
});

Auth::routes();

Route::middleware(['Admin','auth'])->group(function () {
/* Admin Auth */
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::post('/AddWord', [App\Http\Controllers\AdminController::class, 'store'])->name('Add-word');

});


