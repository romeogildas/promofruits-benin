<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/partenaires', function () {
    return view('partenaires');
})->name('partenaires');

Route::get('/ira', function () {
    return view('productIra');
})->name('ira');

Route::get('/govie', function () {
    return view('productGovie');
})->name('govie');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/details-article', function () {
    return view('details-article');
})->name('details-article');

Route::get('/details-article2', function () {
    return view('details-article2');
})->name('details-article2');

Route::get('/details-article3', function () {
    return view('details-article3');
})->name('details-article3');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
