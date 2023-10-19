<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [RecordsController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/records', 'RecordController@index')->name('records.index');
    Route::get('/records/{record}', 'RecordController@show')->name('records.show');
    Route::get('/records/{record}/edit', 'RecordController@edit')->name('records.edit');
    Route::put('/records/{record}', 'RecordController@update')->name('records.update');
    Route::delete('/records/{record}', 'RecordController@destroy')->name('records.destroy');

});

require __DIR__.'/auth.php';
