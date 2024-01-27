<?php

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\CommentController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('')->group(function () {   // if want to add version

    // --------- UserController Routes ------------
    Route::get('/users', [UserController::class , 'getAllUsers' ])->name('users');
    Route::get('users/{id}',[UserController::class , 'show'])->name('user.show');
    Route::delete('/users/{id}' , [UserController::class , 'delete'])->name('user.delete');
    Route::prefix('/user')->group(function () {
        Route::post('/register' , [UserController::class , 'register'])->name('user.register');
        Route::post('/login' , [UserController::class , 'login'])->name('user.login');
        Route::post('/logout', [UserController::class , 'logout'])->name('user.logout');
    });

    // --------- CategoryController Routes ----------
    Route::resource('/categories', CategoryController::class );

    // ----------- PostController Routes -------------
    Route::resource('/posts', PostController::class);

    // ---------- CommentController Routes ------------
    Route::resource('/comments', CommentController::class);

});
