<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductAtHomepage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [ProductAtHomepage::class, 'index']);

Route::get('/wishlist', function () {
    return view('pages.wishlist');
});

Route::get('/kitchen', function () {
    return view('pages.kitchen');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/about', function (){
   return view('pages.about');
});

Route::get('/shipping', function (){
    return view('pages.shipping');
});

Route::get('/care', function (){
    return view('pages.care');
});

Route::get('/hold', function (){
    return view('pages.hold');
});

Route::get('/codes', function (){
    return view('pages.codes');
});

Route::get('/contact', function (){
    return view('pages.contact');
});

Route::get('/faqs', function (){
    return view('pages.faqs');
});

Route::get('/offer', function (){
    return view('pages.offer');
});

Route::get('/single', function (){
    return view('pages.single');
});

Route::get('/terms', function (){
    return view('pages.terms');
});
//Route::put('product/{id}', [ProductController::class, 'update']);

Route::resource('user', UserController::class);
//Route::resource('phone', 'PhoneController');
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
