<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [IndexController::class, 'indexDashboard'])->name('dashboard.index');
Route::get('/buttons', [IndexController::class, 'buttons'])->name('dashboard.buttons');
Route::get('/dropdown', [IndexController::class, 'dropdown'])->name('dashboard.dropdown');
Route::get('/typography', [IndexController::class, 'typography'])->name('dashboard.typography');
Route::get('/blank-page', [IndexController::class, 'blankpage'])->name('dashboard.blankpage');
Route::get('/error404', [IndexController::class, 'error404'])->name('dashboard.error404');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/icons', [IndexController::class, 'icons'])->name('icons');
Route::get('/charts', [IndexController::class, 'charts'])->name('charts');
