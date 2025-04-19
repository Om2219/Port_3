<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::redirect('/', '/index');

Route::get('/index', [RecipeController::class, 'index'])->name('index');
Route::get('/create', [RecipeController::class, 'create'])->name('create')->middleware('auth');
Route::get('/recipes/{rid}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/search', [RecipeController::class, 'search'])->name('recipes.search');
Route::get('/recipes/{rid}/edit', [RecipeController::class, 'edit'])->name('recipes.edit')->middleware('auth');
Route::delete('/recipes/{rid}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
Route::put('/recipes/{rid}', [RecipeController::class, 'update'])->name('recipes.update')->middleware('auth');
Route::post('/create',[RecipeController::class, 'store'])->name('recipe.store')->middleware('auth');

Route::get('/Login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/register',[AuthController::class, 'showRegister'])->name('show.register');
Route::post('/Login', [AuthController::class, 'Login'])->name('login');
Route::post('/register',[AuthController::class, 'Register'])->name('register');
Route::post('/Logout', [AuthController::class, 'logout'])->name('logout');


