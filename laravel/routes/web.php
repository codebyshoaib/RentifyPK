<?php
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;


Route::get('signupSuccess', function () {
    return view('signupSuccess');
})->name('signupSuccess');
Route::get('loginSuccess', function () {
    return view('loginSuccess');
})->name('loginSuccess');
Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
Route::get('/registeration',[AuthManager::class,'registeration'])->name('registeration');
Route::post('/registeration',[AuthManager::class,'registerationPost'])->name('registeration.post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');


//page routes
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');