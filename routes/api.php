<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Book
// Route::get('/Book', [BookController::class, 'index']);
// Route::post('/Book', [BookController::class, 'store']);
// Route::get('/Book/{id}', [BookController::class, 'show']);
// Route::put('/Book/{id}', [BookController::class, 'update']);
// Route::delete('/Book/{id}', [BookController::class, 'destroy']);

Route::resource('/books', BookController::class)->except('edit','create');

//Author
Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors', [AuthorController::class, 'store']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);
Route::put('/authors/{id}', [AuthorController::class, 'update']);
Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);

