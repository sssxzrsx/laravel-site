<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/register', [AuthController::class, 'create']) -> name('register.create');
Route::post('/store', [AuthController::class, 'register']) -> name('store');
Route::get('/login', [AuthController::class, 'ShowLoginForm']) -> name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');


Route::get('/dashboard', function (){
    return 'Добро пожаловать в личный кабинет.';
}) -> middleware('auth') -> name('dashboard');

Route::get('/categories', [CategoryController::class, 'index']) -> name('categories.index');
Route::get('/categories/{id}', [categoryController::class, 'show']) -> name('category.show');

Route::get('/index', function () {
    return view('index');
}) -> name('index');

Route::get('/auth/register', function () {
    return view('auth/register');
}) -> name('register');

Route::get('/ads', function () {
    return view('ads');
}) -> name('ads');