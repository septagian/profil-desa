<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


Route::get('Auth/login', [LoginController::class, 'login'])->name('Auth.login');
Route::post('Auth/login/proses', [LoginController::class, 'proseslogin'])->name('Auth.login.proses');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group([ 'middlewhere'=> ['userlogin']], function() {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});