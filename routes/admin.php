<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AdminLoginController::class, 'viewLogin'])->name('login.view');
Route::post('admin-login', [AdminLoginController::class, 'login'])->name('login.post');
Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

Route::middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings-update/{id}', [SettingsController::class, 'update'])->name('settings.update');
    Route::get('/profile/{id}', [AdminController::class,'viewProfile'])->name('viewProfile');
    Route::get('/profile/edit/{id}', [AdminController::class,'editProfile'])->name('editProfile');
    Route::post('/profile/update/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/change-pass/{id}', [AdminController::class,'changePass'])->name('changePass');
    Route::post('/pass/update/{id}', [AdminController::class, 'updatePass'])->name('updatePass');
    Route::resource('roles', RoleController::class);
});

