<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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


Route::get('/', [\App\Http\Controllers\Frontend\MenuController::class, 'index'])->name('index');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/admin', [AuthController::class, 'getLogin'])->name('auth.getLogin');
Route::post('/admin', [AuthController::class, 'login'])->name('auth.login');
Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');
    Route::resource('admin/menu', MenuController::class);
    Route::resource('admin/content', ContentController::class);

});
