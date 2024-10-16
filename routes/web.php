<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\User\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('user.phone.home');
Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.phone.detail');

Route::get('admin/register',[AdminController::class,'register'])->name( 'admin.register');
Route::post('admin/register',[AdminController::class,'store'])->name( 'admin.store');


Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::get('admin/information/{user}', [AdminController::class, 'user_information'])->name('admin.information');

Route::middleware('auth')->group(function () {
    Route::get('admin/phone/dashboard', [PhoneController::class, 'dashboard'])->name('admin.phone.dashboard');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('admin/phone/create',[PhoneController::class, 'create'])->name('admin.phone.create');
    Route::post('admin/phone/create',[PhoneController::class, 'store'])->name('admin.phone.store');


    Route::delete('admin/phone/delete/{phone}',[PhoneController::class, 'destroy'])->name('admin.phone.destroy');



    Route::get('admin/phone/edit/{phone}', [PhoneController::class, 'edit'])->name('admin.phone.edit');
    Route::put('admin/phone/update/{phone}', [PhoneController::class, 'update'])->name('admin.phone.update'); // Change to PUT

    Route::get('admin/accountmanagement/account', [AccountController::class, 'index'])->name('admin.accountmanagement.account');
    Route::delete('admin/accountmanagement/account/delete/{user}',[AccountController::class, 'destroy'])->name('admin.accountmanagement.destroy');
    
    Route::get('admin/accountmanagement/account/edit/{user}', [AccountController::class, 'edit'])->name('admin.accountmanagement.editaccount');
    Route::put('admin/accountmanagement/account/update/{user}', [AccountController::class, 'update'])->name('admin.accountmanagement.update'); // Change to PUT

    // danh muc
    Route::get('admin/category/categorymanagement',[CategoryController::class, 'index'])->name('admin.category.categorymanagement');

    Route::get('admin/category/create',[CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('admin/category/create',[CategoryController::class, 'store'])->name('admin.category.store');

    Route::delete('admin/category/delete/{category}',[CategoryController::class, 'destroy'])->name('admin.category.destroy');




});