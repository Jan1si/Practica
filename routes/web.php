<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableCollectiveController;
use App\Http\Controllers\Admin\TableDocumentsController;
use App\Http\Controllers\Admin\TableMessageController;
use App\Http\Controllers\Admin\TableNewsController;
use App\Http\Controllers\Admin\TablePostCollectiveController;
use App\Http\Controllers\Admin\TableRoleController;
use App\Http\Controllers\Admin\TableTypesDocumentController;
use App\Http\Controllers\Admin\TableUserController;
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

Route::middleware(['admin'])->group( function (){

    Route::get('/admin', [AdminController::class, 'admin_index'])->name('view-table');

    Route::get('/admin/users_table', [AdminController::class, 'users_table'])->name('users_table');
    Route::get('/admin/roles_table', [AdminController::class, 'roles_table'])->name('roles_table');
    Route::get('/admin/news_table', [AdminController::class, 'news_table'])->name('news_table');
    Route::get('/admin/documents_table', [AdminController::class, 'documents_table'])->name('documents_table');
    Route::get('/admin/types_document_table', [AdminController::class, 'types_document_table'])->name('types_document_table');
    Route::get('/admin/posts_collective_table', [AdminController::class, 'posts_collective_table'])->name('posts_collective_table');
    Route::get('/admin/collective_table', [AdminController::class, 'collective_table'])->name('collective_table');
    Route::get('/admin/message_table', [AdminController::class, 'message_table'])->name('message_table');


    Route::resource('message_table', TableMessageController::class);
    Route::resource('user_table', TableUserController::class);
    Route::resource('role_table', TableRoleController::class);
    Route::resource('news_table', TableNewsController::class);
    Route::resource('documents_table', TableDocumentsController::class);
    Route::resource('types_document_table', TableTypesDocumentController::class);
    Route::resource('collective_table', TableCollectiveController::class);
    Route::resource('posts_collective_table', TablePostCollectiveController::class);

});



