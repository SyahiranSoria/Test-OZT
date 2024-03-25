<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

Route::get('/', function () {
    return view('welcome');
});
|
*/


Route::get('/',[AuthController::class,'show'])->name('login.page');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
    Route::get('/create',[UserController::class,'create'])->name('create');
    Route::get('/api',[ApiController::class,'fetchDataAndProcess'])->name('api');
    Route::post('/create',[UserController::class,'store'])->name('store');
    Route::get('/{users}/view',[UserController::class,'view'])->name('view');
    Route::delete('/{users}/delete', [UserController::class, 'delete'])->name('delete');
    Route::get('/{users}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{users}/update', [UserController::class, 'update'])->name('update');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});




