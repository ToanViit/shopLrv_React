<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/product', function () {
//     return view('productDetail');
// });
Route::get('listuser', [PostController::class, 'index'])->name('listuser.index');

// Route::get('listProduct', [ProductController::class, 'showAllProduct'])->name('listProduct.list');

