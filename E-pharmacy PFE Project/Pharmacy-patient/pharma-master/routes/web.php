<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\IndexController;
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

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/shop-single', function () {
    return view('shop-single');
})->name('shop-single');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

/*--------------------------------INDEX---------------------------------------*/

Route::get('/', [IndexController::class, 'popularProducts']);

Route::get('/shop', [IndexController::class, 'showMagasin']);

Route::get('/products', [shopController::class, 'filterProducts']);



/*-----------------------------------Categories-----------------------------------------*/

Route::get('/complements', [CategorieController::class, 'showComplements']);

Route::get('/medicaments', [CategorieController::class, 'showMedicaments']);

Route::get('/premiers', [CategorieController::class, 'showPremiers']);

Route::get('/complementsFiltered', [CategorieController::class, 'filterComplements']);

Route::get('/medicamentsFiltered', [CategorieController::class, 'filterMedicaments']);

Route::get('/premiersFiltered', [CategorieController::class, 'filterPremiers']);
