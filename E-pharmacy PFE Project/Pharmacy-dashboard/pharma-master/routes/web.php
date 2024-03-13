<?php

use App\Http\Controllers\ComplementAlimentaireController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});



/***************Complements Alimentaires***************/

Route::get('/complements', [ComplementAlimentaireController::class, 'showComplementsList'])->name('complements.list');

Route::get('/addComplement', [ComplementAlimentaireController::class, 'addComplement'])->name('complements.ajout');

