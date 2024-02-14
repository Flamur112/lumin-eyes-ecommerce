<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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



// Route::get('/', function () {
//     return view('welcome');
// });





Auth::routes();

    Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
    Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
    Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
    Route::get('/collections/{category_slug}/{product_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);



    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Slider Routes
    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders', 'index');
        Route::get('sliders/create', 'create');
        Route::post('sliders/create', 'store');
        Route::get('sliders/{slider}/edit', 'edit');
        Route::put('sliders/{slider}', 'update');
        Route::get('sliders/{slider}/delete', 'destroy');
    });

    // Category Routes
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{category}', [CategoryController::class, 'update']);


    // Brand
    Route::get('/brands', [App\Http\Livewire\Admin\Brand\Index::class, 'render']);

    // Product Routes
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function (){
    Route::get('/products','index');
    Route::get('/products/create', 'create');
    Route::post('/products', 'store');
    Route::get('/products/{product}/edit', 'edit');
    Route::put('/products/{product}', 'update');
    Route::get('/products/{product_id}/delete', 'destroy');
    Route::get('product-image/{product_image_id}/delete' , 'destroyImage');
    });



});
