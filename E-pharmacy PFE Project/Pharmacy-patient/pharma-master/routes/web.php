<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');


/*--------------------------------INDEX---------------------------------------*/

Route::get('/', [IndexController::class, 'popularProducts']);


/*-------------------------------------Shop------------------------------------*/

Route::get('/shop/produits', [shopController::class, 'showMagasinProduits']);

Route::get('/shop/packs', [shopController::class, 'showMagasinPacks']);

Route::get('/products', [shopController::class, 'filterProducts']);

Route::get('/packs', [shopController::class, 'filterPacks']);

Route::get('/product-details/{id}', [shopController::class, 'showDetails']);

Route::get('/pack-details/{id}', [shopController::class, 'showPackDetails']);

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart');

Route::get('/removeItem/{type}/{itemId}', [CartController::class, 'removeItem'])->name('remove.item');

Route::get('/checkout', [CartController::class, 'getItems']);

Route::post('/passer-commande', [CartController::class, 'passerCommande'])->name('passer-commande');

/* !!!!!!!! */
Route::post('/update-quantity', [CartController::class, 'updateQuantity'])->name('update.quantity');
/* !!!!!!!! */

Route::get('/shop/cancelCart', [CartController::class, 'cancelCart'])->name('cancel.cart');

Route::post('/shop/searchProduct', [shopController::class, 'searchProduct']);

Route::post('/shop/searchPack', [shopController::class, 'searchPack']);


/*--------------------------------------Categories-----------------------------------------*/

Route::get('/categorie/{id}', [CategorieController::class, 'showProducts'])->name('categorie.products');

Route::get('/categorieFiltered/{id}', [CategorieController::class, 'filterProducts'])->name('categorie.filter');

Route::post('/searchCategorie/{id}', [CategorieController::class, 'searchCategorie']);


/*--------------------------------------About-----------------------------------------*/

Route::get('/about', [IndexController::class, 'aboutPage']);

Route::get('/contact', [IndexController::class, 'contactPage']);


/*-----------------------Docteurs------------------------------*/

Route::get('/docteurs', [DocteurController::class, 'showMedsList']);

// Route::get('/docteurs/search', [DocteurController::class, 'searchMedecin']);

// Route::match(['get', 'post'], '/docteurs/search', [DocteurController::class, 'searchMedecin']);


/*-----------------------Contact------------------------------*/

Route::post('/addMessage', [MessageController::class, 'addMessage']);


/*------------------------Produit--------------------------*/

Route::post('/upload-order', [ProduitController::class, 'uploadOrder'])->name('upload.order');

