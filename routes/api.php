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
Route::get('/books', [BookController::class, 'index']);
Route::post('/books/add', [BookController::class, 'store']);
Route::post('/books/update/{id}', [BookController::class, 'update']);


Route::get('/author', [AuthorController::class, 'index']);
Route::post('/author/add', [AuthorController::class, 'store']);
Route::post('/author/add', [AuthorController::class, 'store']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});