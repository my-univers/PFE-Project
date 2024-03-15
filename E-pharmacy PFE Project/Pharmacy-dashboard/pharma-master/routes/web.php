<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComplementAlimentaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PremierSecoursController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);


/******************Clients******************/

Route::get('/clients/list', [ClientController::class, 'showClientsList']);

Route::get('/clients/addForm', [ClientController::class, 'addClientForm']);

Route::post('/clients/add', [ClientController::class, 'addClient']);

Route::get('/clients/updateForm/{id}', [ClientController::class, 'updateClientForm']);

Route::post('/clients/update/{id}', [ClientController::class, 'updateClient']);

Route::get('/clients/delete/{id}', [ClientController::class, 'deleteClient']);

/***************Complements Alimentaires***************/

Route::get('/complements', [ComplementAlimentaireController::class, 'showComplementsList'])->name('complements.list');

Route::get('/complements/form', [ComplementAlimentaireController::class, 'showForm'])->name('complements.form');

Route::get('/complements/add', [ComplementAlimentaireController::class, 'addComplement']);

Route::get('/complements/updateForm/{id}', [ComplementAlimentaireController::class, 'showUpdateForm']);

Route::post('/complements/update/{id}', [ComplementAlimentaireController::class, 'updateComplement']);

Route::get('/complements/delete/{id}', [ComplementAlimentaireController::class, 'deleteComplement']);

/***************Premiers Secours***************/

Route::get('/premiers_secours', [PremierSecoursController::class, 'showList']);

Route::get('/premiers_secours/form', [PremierSecoursController::class, 'showForm']);

Route::get('/premiers_secours/updateForm/{id}', [PremierSecoursController::class, 'showUpdateForm']);

Route::post('/premiers_secours/update/{id}', [PremierSecoursController::class, 'updatePremier']);

Route::get('/premiers_secours/delete/{id}', [PremierSecoursController::class, 'deletePremier']);

