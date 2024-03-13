<?php

use App\Http\Controllers\ClientController;
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

/******************Clients******************/

Route::get('/clients/list', [ClientController::class, 'showClientsList']);

Route::get('/clients/addForm', [ClientController::class, 'addClientForm']);

Route::post('/clients/add', [ClientController::class, 'addClient']);

Route::get('/clients/updateForm/{id}', [ClientController::class, 'updateClientForm']);

Route::post('/clients/update/{id}', [ClientController::class, 'updateClient']);

Route::get('/clients/delete/{id}', [ClientController::class, 'deleteClient']);

/***************Complements Alimentaires***************/

Route::get('/complements', [ComplementAlimentaireController::class, 'showComplementsList'])->name('complements.list');


Route::get('/complements/formulaire', [ComplementAlimentaireController::class, 'showForm'])->name('complements.form');




