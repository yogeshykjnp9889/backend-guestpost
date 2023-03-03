<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('get-post',Apico)
Route::get('/get-post', [Apicontroller::class, "getPost"]);
Route::get('/get-category', [Apicontroller::class, "getCategory"]);
Route::get('/category-detail', [Apicontroller::class, "categoryDetail"]);
Route::get('/category/{cateSlug}', [Apicontroller::class, "categoryWishPost"]);
Route::get('/get-postdetail', [Apicontroller::class, "PostDetail"]);