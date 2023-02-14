<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoboekController;

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


Route::get('/', [FotoboekController::class, 'index'])
    ->name('fotoboek.index');

Route::post('/', [FotoboekController::class, 'filter'])
    ->name('fotoboek.filter');

Route::any('/test', [FotoboekController::class, 'test'])
    ->name('fotoboek.test');
