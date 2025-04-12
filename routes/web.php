<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;

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



Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/store', [PageController::class, 'store']);


Route::get('/services', [PageController::class, 'services']);

Route::get('/projects', [PageController::class, 'projects']);

Route::get('/blogs', [PageController::class, 'blogs']);

Route::get('/blog', [PageController::class, 'blog']);

Route::get('/posts/{slug}', [PageController::class, 'posts']);

Route::get('/shop', [PageController::class, 'shop']);

Route::get('/product', [PageController::class, 'product']);

Route::get('/cart', [PageController::class, 'cart']);

Route::get('/checkout', [PageController::class, 'checkout']);

Route::get('/load-calculator', [PageController::class, 'loadCalculator']);

Route::get('/rtmd-training-2025', [PageController::class, 'shortUrl']);


Route::post('/post-message', [ContactFormController::class, 'post_message']);










// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
