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

Route::get('/', [PageController::class, 'viewHome']);
Route::get('/home', [PageController::class, 'viewHome']);
Route::get('/contact', [PageController::class, 'viewContact']);

Route::get('/category/{category_id}', [PageController::class, 'viewCategory']);
Route::get('/book/{book_id}', [PageController::class, 'viewBookDetail']);