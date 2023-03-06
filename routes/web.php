<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ACMController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\BannerController;

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
Route::prefix('authenticate')->name('backend.auth.')->group(function(){
    Route::get('/login',[BackendController::class,'login'])->name('login');
    Route::post('/login-submit',[BackendController::class,'loginSubmit'])->name('login.submit');
});
Route::name('backend.')->middleware('auth')->group(function(){
    Route::get('/logout',[BackendController::class,'logout'])->name('logout');
    Route::get('/',[BackendController::class,'index'])->name('index');
    Route::prefix('settings')->name('settings.')->group(function(){
        Route::get('/',[SettingsController::class,'index'])->name('index');
        Route::put('/update',[SettingsController::class,'update'])->name('update');
    });
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('role-permission')->name('role-permission.')->group(function () {
        Route::get('/', [ACMController::class, 'index'])->name('index');
        Route::get('/create', [ACMController::class, 'create'])->name('create');
        Route::post('/store', [ACMController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ACMController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ACMController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [ACMController::class, 'delete'])->name('destroy');
    });
    Route::prefix('banner')->name('banner.')->group(function(){
        Route::get('', [BannerController::class, 'index'])->name('index');
        Route::get('/create', [BannerController::class, 'create'])->name('create');
        Route::post('/store', [BannerController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BannerController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [BannerController::class, 'delete'])->name('destroy');
    });

});
