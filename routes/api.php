<?php

use App\Http\Controllers\Api\v1\CategoryController;
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

Route::prefix('api/v1')->group(function () {

    // --------- UserController Routes ------------
    Route::get('/users', [UserController::class , 'getAllUsers' ])->name('users');
    Route::prefix('/user')->group(function () {
        Route::get('/user/{id}',[UserController::class , 'show'])->name('user.show');
        Route::post('/register' , [UserController::class , 'register'])->name('user.register');
        Route::post('/login' , [UserController::class , 'login'])->name('user.login');
        Route::post('/logout', [UserController::class , 'logout'])->name('user.logout');
        Route::put('/delete/{id}' , [UserController::class , 'delete'])->name('user.delete');
    });

    // --------- CategoryController Routes ----------
    Route::get('/categories', [CategoryController::class , 'index'])->name('categories');

    // ----------- PostController Routes -------------
    Route::resource('/post', UserController::class);

});
