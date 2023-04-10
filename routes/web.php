<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin-signup', [AdminController::class, 'processRegister'])->name('admin.register');


Route::get('/', [PagesController::class, 'index']);
Route::get('about', [PagesController::class, 'about']);
Route::get('menu', [PagesController::class, 'menu']);
Route::get('special', [PagesController::class, 'special']);
Route::get('event', [PagesController::class, 'event']);
Route::get('chef', [PagesController::class, 'chef']);
Route::get('gallary', [PagesController::class, 'gallary']);
Route::get('contact', [PagesController::class, 'contact']);

//menu route
Route::get('/all-menu', [MenuController::class, 'index'])->name('all.menu');
Route::get('/starter-menu', [MenuController::class, 'index'])->name('all.starter-menu');