<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Wp-admin
Route::get('/travel-admin', [LoginController::class, "index"])->name('travel-admin');
Route::post('/travel-admin', [LoginController::class, "authenticate"])->name('login');
Route::get('/admin/dashboard', [AdminController::class, "dashboard"])->name('dashboard')->middleware('auth');
Route::get('/admin/add-category', [AdminController::class, "addCategory"])->middleware('auth');
Route::post('/admin/add-category', [AdminController::class, "addCategory"])->middleware('auth');
Route::get('admin/delete-category/{id}', [AdminController::class, "deleteCategory"])->middleware('auth');
Route::get('/admin/add-post', [AdminController::class, "addPost"])->middleware('auth');
Route::post('/admin/add-post', [AdminController::class, "addPost"])->middleware('auth');
Route::get('/admin/post-list', [AdminController::class, "postList"])->middleware('auth');

// Edit Post update and Delete
Route::get('/admin/post-list', [AdminController::class, "postList"])->middleware('auth');
Route::get('/admin/edit-post-{id}', [AdminController::class, "addPost"])->middleware('auth');
Route::post('/admin/edit-post-{id}', [AdminController::class, "addPost"])->middleware('auth');
Route::get('/admin/delete-post/{id}', [AdminController::class, "deletePost"])->middleware('auth');

// Add Question update
Route::get('admin/question/{id}', [AdminController::class, "questionAns"])->middleware('auth');
Route::post('admin/question/{id}', [AdminController::class, "questionAns"])->middleware('auth');

// Logout
Route::get('logout', [LoginController::class, "logout"])->middleware('auth')->name('logout');


Route::get('/', [HomeController::class, "index"]);
Route::get('/name-change/{postSlug}', [HomeController::class, "namechangeDetail"]);
Route::get('/cancellation-policy/{postSlug}', [HomeController::class, "cancellationPolicy"]);

Route::get('/name-change', [HomeController::class, 'namechangeList']);

Route::get('404', [HomeController::class, "page404"]);

Route::fallback(function () {
    return redirect('404');

});