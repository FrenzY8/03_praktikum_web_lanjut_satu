<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/service', [PageController::class, 'service']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/price', [PageController::class, 'price']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/detail', [PageController::class, 'detail']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/appointment', [PageController::class, 'appointment']);
Route::get('/search', [PageController::class, 'search']);
Route::get('/testimonial', [PageController::class, 'testimonial']);
