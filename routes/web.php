<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/links', [MainController::class, 'links'])->name('links');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/about_us', [MainController::class, 'about_us'])->name('about_us');
Route::get('/collective', [MainController::class, 'collective'])->name('collective');
Route::get('/finance', [MainController::class, 'finance'])->name('finance');
Route::get('/documents', [MainController::class, 'documents'])->name('documents');
Route::get('/conditions', [MainController::class, 'conditions'])->name('conditions');


