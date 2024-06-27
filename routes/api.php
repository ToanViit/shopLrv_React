<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;

// Định nghĩa route cho lấy danh sách sản phẩm



// Định nghĩa route cho đăng ký người dùng
Route::post('register', [AuthorController::class, 'register'])->name('user.register');

// Định nghĩa route cho đăng nhập người dùng
Route::post('login', [AuthorController::class, 'login'])->name('user.login');
Route::post('adduser', [PostController::class, 'store'])->name('listuser.index');

 //REVIEW 
Route::get('review', [ReviewController::class, 'index'])->name("review.index");
Route::post('review/create', [ReviewController::class, 'store'])->name("review.store");
Route::get('review/{id}', [ReviewController::class, 'create'])->name("review.create");
Route::put('review/{id}',[ReviewController::class, 'index'])->name("review.update");
// Bạn có thể bỏ comment route dưới nếu cần thiết
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//PRODUCT 
Route::get('getListProduct', [ProductController::class, 'getListProduct'])->name("product.list");
Route::post('product/store', [ProductController::class, 'store'])->name("review.store");
Route::get('product/{id}', [ProductController::class, 'create'])->name("reviews.create");
Route::put('product/{id}',[ProductController::class, 'index'])->name("review.update");