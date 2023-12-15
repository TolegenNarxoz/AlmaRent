<?php

use App\Http\Controllers\Adm\AdminController;
use App\Http\Controllers\Adm\UserController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.home');
});

Route::get('products/category/{category}',[ProductController::class, 'productsByCategory'])->name('products.category');
Route::get('products/about',[ProductController::class, 'about'])->name('products.about');


Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/login', [LoginController::class, 'create'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('products/category/search',[ProductController::class, 'index'])->name('products.search');


Route::middleware('auth')->group(function (){

    Route::middleware('hasrole:moderator,admin')->group(function (){
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class)->only('edit');
        Route::get('adm/users/{user}/edit',[UserController::class, 'edit'])->name('adm.users.edit');
        Route::put('adm/users/{user}', [UserController::class, 'update'])->name('adm.users.update');
        Route::put('adm/users/{user}/ban', [UserController::class, 'ban'])->name('adm.users.ban');
        Route::put('adm/users/{user}/unban', [UserController::class, 'unban'])->name('adm.users.unban');
    });

    Route::get('/adm/users', [UserController::class, 'index'])->name('adm.users.index')->middleware('hasrole:admin');

    Route::post('/products/{product}/subscribe', [ProductController::class, 'subscribe'])->name('products.subscribe');


    Route::middleware('hasrole:moderator,admin')->group(function (){
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class)->only('edit');
        Route::get('adm/users/{user}/edit',[UserController::class, 'edit'])->name('adm.users.edit');
        Route::put('adm/users/{user}', [UserController::class, 'update'])->name('adm.users.update');
        Route::put('adm/users/{user}/ban', [UserController::class, 'ban'])->name('adm.users.ban');
        Route::put('adm/users/{user}/unban', [UserController::class, 'unban'])->name('adm.users.unban');
    });

    Route::resource('products', ProductController::class)->except('index', 'show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::resource('/products', ProductController::class);




//Route::get('products', [ProductController::class, 'productsHome'])->name('productsHome');
//Route::resource('products', ProductController::class);
//Route::resource('categories', CategoryController::class);


//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
