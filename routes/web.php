<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    // Route::get('/edit', [App\Http\Controllers\Admin\DashboardController::class, 'DataUpdateIndex']);
    // Route::get('dashboardupdate', [App\Http\Controllers\Admin\DashboardController::class, 'update']);

    //Category Routes
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);

    //Static Iems
    Route::get('staticitem', [App\Http\Controllers\Admin\StaticItemController::class, 'index'])->name('staticitem');

});

Route::get('/edit{id}', [App\Http\Controllers\Admin\DashboardController::class, 'DataUpdateIndex']);
Route::post('/admin/dashboardupdate{id}', [App\Http\Controllers\Admin\DashboardController::class, 'DataUpdate']);


Route::get('/isuser', [App\Http\Controllers\HomeController::class, 'isuser'])->name('isuser');

Route::get('/home', [App\Http\Controllers\User\UserController::class, 'index'])->name('home');

