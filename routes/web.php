<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
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

Route::get('/registration', [UserController::class, 'userSignUp']);
Route::post('/registration', [UserController::class, 'userSignUpPost']);

Route::get('/login', [UserController::class, 'userSignIn']);
Route::post('/login', [UserController::class, 'userSignInPost']);


Route::get('/todos', [TodoController::class, 'getAllTodo']);
