<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\GraphicController;
use App\Http\Controllers\Frontend\MusicController;
use App\Http\Controllers\Frontend\AudioController;
use App\Http\Controllers\Frontend\VideoController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GetstartedController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/service', [ServicesController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/graphic', [GraphicController::class, 'index']);
Route::get('/video', [VideoController::class, 'index']);
Route::get('/audio', [AudioController::class, 'index']);
Route::get('/music', [MusicController::class, 'index']);
Route::get('/get-started', [GetstartedController::class, 'index']);
