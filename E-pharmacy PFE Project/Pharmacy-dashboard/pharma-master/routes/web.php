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
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PackProduitController;
use App\Http\Controllers\ProduitController;
use PharIo\Manifest\AuthorElement;

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

Route::get('/verifyEmailForm', [AuthenticatedAdminController::class, 'verifyEmailForm'])->name('verification.form');
Route::post('/sendVerificationCode', [AuthenticatedAdminController::class, 'sendVerificationCode'])->name('send.verification.code');
Route::get('/verifyCode', [AuthenticatedAdminController::class, 'showVerifyCodeForm'])->name('verify.code.form');
Route::post('/verifyCode', [AuthenticatedAdminController::class, 'verifyCode'])->name('verify.code');
Route::get('/resetPassword', [AuthenticatedAdminController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('/resetPassword', [AuthenticatedAdminController::class, 'resetPassword'])->name('reset.password');
Route::get('/verify', [AuthenticatedAdminController::class, 'showVerificationForm'])->name('verification.verify');


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

Route::get('/clients/search', [ClientController::class, 'searchClient']);


/**********************Medecins***********************/

Route::get('/medecins/list', [MedecinController::class, 'showMedsList']);

Route::get('/medecins/addForm', [MedecinController::class, 'addMedForm']);

Route::post('/medecins/add', [MedecinController::class, 'addMedecin']);

Route::get('/medecins/updateForm/{id}', [MedecinController::class, 'updateMedForm']);

Route::post('/medecins/update/{id}', [MedecinController::class, 'updateMedecin']);

Route::get('/medecins/delete/{id}', [MedecinController::class, 'deleteMedecin']);

Route::get('/medecins/search', [MedecinController::class, 'searchMedecin']);


/*****************Packs******************/

Route::get('/packs', [PackController::class, 'showList']);

Route::get('/packs/form', [PackController::class, 'showForm']);

Route::post('/packs/add', [PackController::class, 'addPack']);

Route::get('/packs/updateForm/{id}', [PackController::class, 'showUpdateForm']);

Route::post('/packs/update/{id}', [PackController::class, 'updatePack']);

Route::get('/packs/delete/{id}', [PackController::class, 'deletePack']);

Route::get('/packs/search', [PackController::class, 'searchPack']);


/***************Commandes***************/

Route::get('/commandes', [CommandeController::class, 'showList']);

Route::get('/commandes/details/{id}', [CommandeController::class, 'showDetails']);

Route::get('/commandes/valider/{id}', [CommandeController::class, 'validerCommande']);

Route::get('/commandes/form', [CommandeController::class, 'addCommandeForm']);

Route::post('/commandes/add', [CommandeController::class, 'addCommande']);

Route::get('/commandes/cancel/{id}', [CommandeController::class, 'annulerCommande']);

Route::get('/commandes/filterCommandes', [CommandeController::class, 'filterCommandes']);


/****************Admin Profile****************/

Route::get('/profil', [AuthenticatedAdminController::class, 'showProfile']);

Route::post('/profil/edit', [AuthenticatedAdminController::class, 'updateProfile']);

Route::post('/profil/editPassword', [AuthenticatedAdminController::class, 'updatePassword'])->name('profil.updatePassword');


/*****************Produits*****************/

Route::get('/produits/list', [ProduitController::class, 'showList']);

Route::get('/produits/addForm', [ProduitController::class, 'addProduitForm']);

Route::post('/produits/add', [ProduitController::class, 'addProduit']);

Route::get('/produits/updateForm/{id}', [ProduitController::class, 'updateProduitForm']);

Route::post('/produits/update/{id}', [ProduitController::class, 'updateProduit']);

Route::get('/produits/delete/{id}', [ProduitController::class,'deleteProduit']);


/******************Categories*****************/

Route::get('/categories/list', [CategorieController::class, 'showList']);

Route::get('/categories/addForm', [CategorieController::class, 'addCategorieForm']);

Route::post('/categories/add', [CategorieController::class, 'addCategorie']);

Route::get('/categories/updateForm/{id}', [CategorieController::class, 'updateCategorieForm']);

Route::post('/categories/update/{id}', [CategorieController::class, 'updateCategorie']);

Route::get('/categories/delete/{id}', [CategorieController::class,'deleteCategorie']);

Route::get('/categories/search', [CategorieController::class, 'searchCategorie']);


/*****************Packs Produits******************/

Route::get('/packs_produits', [PackProduitController::class, 'showList']);

Route::get('/packs_produits/updateForm/{id}', [PackProduitController::class, 'updateForm']);

Route::post('/packs_produits/update/{id}', [PackProduitController::class, 'updatePackProduit']);

Route::get('/packs_produits/delete/{id}', [PackProduitController::class, 'deletePackProduit']);

Route::get('/packs_produits/details/{id}', [PackProduitController::class, 'showDetails']);

Route::get('/packs_produits/addToPack/{produit_id}/{pack_id}', [PackProduitController::class, 'addToPack']);

Route::get('/packs_produits/removeProduct/{pack_id}/{produit_id}', [PackProduitController::class, 'removeProduct'])->name('packs_produits.removeFromPack');

Route::post('/packs_produits/add', [PackProduitController::class, 'addPackProduits']);

Route::get('/packs_produits/form', [PackProduitController::class, 'showForm']);

Route::get('/packs_produits/search', [PackProduitController::class, 'searchPackProduit']);












/*****************Packs Premiers Secours******************/

Route::get('/packs_premiers_secours', [PackPremiersSecoursController::class, 'showList']);

Route::get('/packs_premiers_secours/form', [PackPremiersSecoursController::class, 'showForm']);

Route::get('/packs_premiers_secours/add', [PackPremiersSecoursController::class, 'addPackPremierSecours']);

Route::get('/packs_premiers_secours/addToPackForm/{id}', [PackPremiersSecoursController::class, 'showAddToPackForm']);

Route::post('/packs_premiers_secours/addToPack/{id}', [PackPremiersSecoursController::class, 'AddToPack']);

Route::get('/packs_premiers_secours/updateForm/{id}', [PackPremiersSecoursController::class, 'updateForm']);

Route::post('/packs_premiers_secours/update/{id}', [PackPremiersSecoursController::class, 'updatePack']);

Route::get('/packs_premiers_secours/delete/{id}', [PackPremiersSecoursController::class, 'deletePack']);


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
