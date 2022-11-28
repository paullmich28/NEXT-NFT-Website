<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::middleware(['guest:web'])->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('homepage');
    Route::get('/home', [UserController::class, 'homepageRedirect'])->name('index');
    Route::get('/login', [UserController::class, 'loginRoute'])->name('login');
    Route::post('/loginproc', [UserController::class, 'loginProcess'])->name('loginProc');
    Route::get('/catalog', [UserController::class, 'catalogshow'])->name('catalog');
    Route::get('/register', [UserController::class, 'registerRoute'])->name('register');
    Route::post('/register/process', [UserController::class, 'create'])->name('register_process');
});

Route::middleware(['auth:web'])->group(function(){
    Route::post('/admin/logout', [UserController::class, 'logout'])->name('user_logout');
    Route::get('/admin/home', [UserController::class, 'adminHome'])->name('admin_home');
    Route::get('/admin/catalog', [UserController::class, 'adminCatalog'])->name('admin_catalog');
    Route::get('/admin/profile', [UserController::class, 'edit'])->name('profile');
    Route::put('/admin/profile/edit', [UserController::class, 'update'])->name('profile_edit');
    Route::get('/admin/profile/changepass', [UserController::class, 'changePass'])->name('password_change');
    Route::put('/admin/profile/changepass/process', [UserController::class, 'changePassProc'])->name('change_pw_process');
    Route::post('/admin/catalog/add', [UserController::class, 'storeProduct'])->name('add_product');
});