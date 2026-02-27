<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products
Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
Route::get('/category/home-care', [ProductController::class, 'homeCare']);
Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);

// Halaman User 
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

//Halaman Sales
Route::get('/sales', [SalesController::class, 'index']);