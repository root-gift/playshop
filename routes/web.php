<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);

    Route::get('/ajoutercategorie', [CategorieController::class, 'ajoutercategorie']);
    Route::post('/sauvercategorie', [CategorieController::class, 'sauvercategorie']);
    Route::get('/table', [CategorieController::class, 'categories']);
    Route::get('/edit_categorie/{id}', [CategorieController::class, 'edit_categorie']);
    Route::post('/modifiercategorie', [CategorieController::class, 'modifiercategorie']);
    Route::get('/supprimercategorie/{id}', [CategorieController::class, 'supprimercategorie']);

    Route::get('/ajouterproduit', [ProduitController::class, 'ajouterproduit']);
    Route::post('/sauverproduit', [ProduitController::class, 'sauverproduit']);
    Route::get('/table', [ProduitController::class, 'produits']);
    Route::get('/produits/recommandation/{id}', [ProduitController::class, 'recommandation']);
    Route::get('/edit_produit/{id}', [ProduitController::class, 'edit_produit']);
    Route::post('/modifierproduit', [ProduitController::class, 'modifierproduit']);
    Route::get('/supprimerproduit/{id}', [ProduitController::class, 'supprimerproduit']);
    Route::get('activer_produit/{id}', [ProduitController::class, 'activer_produit']);
    Route::get('desactiver_produit/{id}', [ProduitController::class, 'desactiver_produit']);

    Route::get('/profil/{id}', [AdminController::class, 'profile']);
});

