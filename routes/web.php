<?php

use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\MessageController;
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


Route::get('/signin', [MainController::class, 'signin'])->name('signin');
Route::get('/signup', [MainController::class, 'signup'])->name('signup');



Route::post('/signin/login', [AuthController::class, 'login'])->name('login');
Route::post('/signup/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [MainController::class, 'profile'])->middleware('user')->name('profile');
Route::post('/profile/send_message', [MessageController::class, 'sendMessage'])->middleware('user')->name('message');
