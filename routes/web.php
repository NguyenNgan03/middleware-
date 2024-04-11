<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function(){
    return '<h1 style="text-align: center;">TRANG CHỦ UNICODE</h1>';
})->name('home');

// client route
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth.admin');
Route::prefix('categories')->group(function () {
    // Danh sách chuyên mục
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    //Lấy chi tiết một chuyên mục
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');;

    Route::post('', [CategoriesController::class, 'updateCategory']);

    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory']);
});

Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});
