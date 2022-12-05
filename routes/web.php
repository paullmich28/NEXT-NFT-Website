<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['guest:web'])->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('homepage');
    Route::get('/home', [UserController::class, 'homepageRedirect'])->name('index');
    Route::get('/catalog', [UserController::class, 'catalogshow'])->name('catalog');
    Route::get('/collab', [UserController::class, 'collab'])->name('collab');
});

Route::middleware(['admin'])->group(function(){
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin_home');
    Route::get('/admin/catalog', [AdminController::class, 'adminCatalog'])->name('admin_catalog');
    Route::post('/admin/catalog/add', [AdminController::class, 'store'])->name('add_product');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
