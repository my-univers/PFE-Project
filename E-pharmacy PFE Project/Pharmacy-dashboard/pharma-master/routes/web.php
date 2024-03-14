<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComplementAlimentaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedecinController;
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


/**********************Medecins***********************/

Route::get('/medecins/list', [MedecinController::class, 'showMedsList']);

Route::get('/medecins/addForm', [MedecinController::class, 'addMedForm']);

Route::post('/medecins/add', [MedecinController::class, 'addMedecin']);

Route::get('/medecins/updateForm/{id}', [MedecinController::class, 'updateMedForm']);

Route::post('/medecins/update/{id}', [MedecinController::class, 'updateMedecin']);

Route::get('/medecins/delete/{id}', [MedecinController::class, 'deleteMedecin']);


/***************Complements Alimentaires***************/

Route::get('/complements', [ComplementAlimentaireController::class, 'showComplementsList'])->name('complements.list');

Route::get('/complements/formulaire', [ComplementAlimentaireController::class, 'showForm'])->name('complements.form');




