<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComplementAlimentaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PremierSecoursController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PackPremiersSecoursController;
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


/******************Medicaments****************/

Route::get('/medicaments/list', [MedicamentController::class, 'showMedicsList']);

Route::get('/medicaments/addForm', [MedicamentController::class, 'addMedicForm']);

Route::post('/medicaments/add', [MedicamentController::class, 'addMedicament']);

Route::get('/medicaments/updateForm/{id}', [MedicamentController::class, 'updateMedicForm']);

Route::post('/medicaments/update/{id}', [MedicamentController::class, 'updateMedicament']);

Route::get('/medicaments/delete/{id}', [MedicamentController::class, 'deleteMedicament']);


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

Route::get('/premiers_secours/add', [PremierSecoursController::class, 'addPremier']);

Route::get('/premiers_secours/updateForm/{id}', [PremierSecoursController::class, 'showUpdateForm']);

Route::post('/premiers_secours/update/{id}', [PremierSecoursController::class, 'updatePremier']);

Route::get('/premiers_secours/delete/{id}', [PremierSecoursController::class, 'deletePremier']);

/*****************Packs******************/

Route::get('/packs', [PackController::class, 'showList']);

Route::get('/packs/form', [PackController::class, 'showForm']);

Route::get('/packs/add', [PackController::class, 'addPack']);

Route::get('/packs/updateForm/{id}', [PackController::class, 'showUpdateForm']);

Route::post('/packs/update/{id}', [PackController::class, 'updatePack']);

Route::get('/packs/delete/{id}', [PackController::class, 'deletePack']);


/***************Commandes***************/


