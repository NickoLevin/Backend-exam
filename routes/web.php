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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', App\Http\Controllers\UserController::class,
)->middleware(['auth'])->name('user');

Route::get('/thing', [App\Http\Controllers\ThingController::class, 'formThing']
)->middleware(['auth'])->name('thing');

Route::post('/thing', [App\Http\Controllers\ThingController::class, 'newThing']
)->middleware(['auth'])->name('newthing');

Route::get('/give', App\Http\Controllers\GiveController::class,
)->middleware(['auth'])->name('give');

Route::post('/give', [App\Http\Controllers\GiveController::class,'give' ]
)->middleware(['auth'])->name('give');


require __DIR__.'/auth.php';
