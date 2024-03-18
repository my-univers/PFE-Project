<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComplementAlimentaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PackPremiersSecoursController;
use App\Http\Controllers\PremierSecoursController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


/**********************Login - Register*******************+*/

Route::get('/registerForm', [RegisteredAdminController::class, 'showRegistrationForm']);

Route::post('/register', [RegisteredAdminController::class, 'register']);

Route::get('/loginForm', [AuthenticatedAdminController::class, 'showLoginForm']);

Route::post('/login', [AuthenticatedAdminController::class, 'login']);

Route::get('/logout', [AuthenticatedAdminController::class, 'logout']);


/*********************Dashboard**********************/

Route::get('/', [AuthenticatedAdminController::class, 'showLoginForm']);

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

Route::post('/complements/add', [ComplementAlimentaireController::class, 'addComplement']);

Route::get('/complements/updateForm/{id}', [ComplementAlimentaireController::class, 'showUpdateForm']);

Route::post('/complements/update/{id}', [ComplementAlimentaireController::class, 'updateComplement']);

Route::get('/complements/delete/{id}', [ComplementAlimentaireController::class, 'deleteComplement']);


/***************Premiers Secours***************/

Route::get('/premiers_secours', [PremierSecoursController::class, 'showList']);

Route::get('/premiers_secours/form', [PremierSecoursController::class, 'showForm']);

Route::post('/premiers_secours/add', [PremierSecoursController::class, 'addPremier']);
Route::post('/premiers_secours/add', [PremierSecoursController::class, 'addPremier']);

Route::get('/premiers_secours/updateForm/{id}', [PremierSecoursController::class, 'showUpdateForm']);

Route::post('/premiers_secours/update/{id}', [PremierSecoursController::class, 'updatePremier']);

Route::get('/premiers_secours/delete/{id}', [PremierSecoursController::class, 'deletePremier']);


/*****************Packs******************/

Route::get('/packs', [PackController::class, 'showList']);

Route::get('/packs/form', [PackController::class, 'showForm']);

Route::post('/packs/add', [PackController::class, 'addPack']);

Route::get('/packs/updateForm/{id}', [PackController::class, 'showUpdateForm']);

Route::post('/packs/update/{id}', [PackController::class, 'updatePack']);

Route::get('/packs/delete/{id}', [PackController::class, 'deletePack']);


/*****************Packs Premiers Secours******************/

Route::get('/packs_premiers_secours', [PackPremiersSecoursController::class, 'showList']);

Route::get('/packs_premiers_secours/form', [PackPremiersSecoursController::class, 'showForm']);

Route::get('/packs_premiers_secours/add', [PackPremiersSecoursController::class, 'addPackPremierSecours']);

Route::get('/packs_premiers_secours/addToPackForm/{id}', [PackPremiersSecoursController::class, 'showAddToPackForm']);

Route::post('/packs_premiers_secours/addToPack/{id}', [PackPremiersSecoursController::class, 'AddToPack']);

Route::get('/packs_premiers_secours/updateForm/{id}', [PackPremiersSecoursController::class, 'updateForm']);

Route::post('/packs_premiers_secours/update/{id}', [PackPremiersSecoursController::class, 'updatePack']);

Route::get('/packs_premiers_secours/delete/{id}', [PackPremiersSecoursController::class, 'deletePack']);

/***************Commandes***************/




/****************Admin Profile****************/

Route::get('/profil', [AuthenticatedAdminController::class, 'showProfile']);

Route::post('/profil/edit', [AuthenticatedAdminController::class, 'updateProfile']);

Route::post('/profil/editPassword', [AuthenticatedAdminController::class, 'updatePassword'])->name('profil.updatePassword');

