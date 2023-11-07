<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DashbboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});


Auth::routes();

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    // Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::get('/', [DashbboardController::class, 'index'])->name('/');
    Route::get('total-sales', [SalesController::class, 'index'])->name('total-sales');
    Route::get('sales-by-category', [SalesController::class, 'salesByCategory'])->name('sales-by-category');
    Route::get('total-selling-product', [ProductController::class, 'index'])->name('total-selling-product');
    Route::get('revenue-trends', [DashbboardController::class, 'revenueTrends'])->name('revenue-trends');
    Route::get('order-status', [OrderController::class, 'index'])->name('order-status');
    Route::get('customer-acquisition', [UserController::class, 'customerAcquisition'])->name('customer-acquisition');
    Route::get('user-profile', [UserController::class, 'userProfile'])->name('user-profile');
    Route::get('analytics', [DashbboardController::class, 'manageAllSalesAnalytics'])->name('analytics');
});

Auth::routes();

