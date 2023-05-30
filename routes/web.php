<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileEncryptionController;

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
    return view('encrypt');
});

Route::get('/decrypt', [FileEncryptionController::class, 'decrypt'])->name('decrypt');
Route::post('/file', [FileEncryptionController::class, 'store'])->name('store');
Route::post('/files/download/{id}', [FileEncryptionController::class, 'download'])->name('download');

