<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\shopController;
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

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

// Route::get('/shop-single', function () {
//     return view('shop-single');
// })->name('shop-single');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

// Route::get('/checkout', function () {
//     return view('checkout');
// })->name('checkout');

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

Route::post('/update-quantity', [CartController::class, 'updateQuantity'])->name('update.quantity');


/*--------------------------------------Categories-----------------------------------------*/

Route::get('/categorie/{id}', [CategorieController::class, 'showProducts'])->name('categorie.products');

Route::get('/categorieFiltered/{id}', [CategorieController::class, 'filterProducts'])->name('categorie.filter');


/*--------------------------------------About-----------------------------------------*/

Route::get('/about', [IndexController::class, 'aboutPage']);

Route::get('/contact', [IndexController::class, 'contactPage']);


/*-----------------------Docteurs------------------------------*/

Route::get('/docteurs', [DocteurController::class, 'showMedsList']);


/*-----------------------Contact------------------------------*/

Route::post('/addMessage', [MessageController::class, 'addMessage']);


/*------------------------Produit--------------------------*/

Route::post('/upload-order', [ProduitController::class, 'uploadOrder'])->name('upload.order');
