<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
 
use App\Http\Controllers\myController;

use App\Http\Controllers\RegistrationController;

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

Route::get('/form', [RegistrationController::class, 'index']);
Route::post('/form', [RegistrationController::class, 'formValidation']);

Route::get('/post/{id}/{password}/{name}','App\Http\Controllers\myController@show_post');  

Route::get('/show/{id}', [myController::class, 'show']);
Route::get('/index', [myController::class, 'index']);

Route::middleware(['guard', 'check'])->group(function(){
    Route::get('/about', function () {
    return View("about");
    })->name('about');

    Route::get('/contact', function () {
    return View("contact");
    })->name('contact');
});

Route::get('/products', function () {
    return View("products");
})->name('products');



Route::get('/price', function () {
    return View("price");
})->name('price');

Route::get('/welcome', function () {
    return View("welcome");
});

Route::get('/out', function () {
    return View("out");
});

Route::get('/test', function () {
    return View("test");});





Route::get('/no_access', function(){
echo "You are not allowed to access this page";
die;
});

Route::get('/logout', function(){
    session()->forget('user_id');
    return redirect('/out');
})->name('logout');

Route::get('/login', function(){
    session()->put('user_id', 1);
    session()->put('id', 11);
    return redirect('/');
})->name('login');

Route::get('/signin', function(){
    session()->put('id', 2);
    return redirect('price');
});

Route::get('/signout', function(){
    session()->forget('id');
    return redirect('/');
});

Route::get('/', function () {
    return View("show");
});

Route::get('/temp', function () {
    return View("temp");
});

Route::post('/users', [RegistrationController::class, 'formData']);

