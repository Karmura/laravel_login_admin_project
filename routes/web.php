<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin_dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('isuser');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    // Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('/home', [App\Http\Controllers\User\UserDashboardController::class,'index'])->name('home');

    Route::get('update_items', [App\Http\Controllers\Admin\ItemController::class,'index']);

    Route::get('dashboard/{items}', [App\Http\Controllers\Admin\ItemController::class,'edit'])->name('edit');

    Route::put('dashboard/{items}', [App\Http\Controllers\Admin\ItemController::class,'update'])->name('update');

});

// Route::get('/', [App\Http\Controllers\User\UserDashboardController::class,'view']);

Route::get('/', [App\Http\Controllers\User\UserDashboardController::class,'index']);

