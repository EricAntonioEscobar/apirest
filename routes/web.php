<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\FormController;
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

Route::get('form', [FormController::class, 'index'])->name('form.index');
Route::post('datos', [ArticuloController::class, 'store'])->name('form.store');
Route::get('data', [CrudController::class, 'index'])->name('articulos.index');
