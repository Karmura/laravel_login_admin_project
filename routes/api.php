<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



/** ---------Register and Login ----------- */
Route::controller(RegisterController::class)->group(function()
{
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('users', 'login')->name('index');

});
/** -----------Users --------------------- */
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/users',[RegisterController::class,'index'])->name('index');
});

Route::middleware('auth:sanctum')->controller(RegisterController::class)->group(function() {
    Route::get('/users','index')->name('index');
});


Route::get('contacts', [ContactController::class, 'contacts']);
Route::post('save_contact', [ContactController::class, 'saveContact']);
Route::get('get_contact/{id}', [ContactController::class, 'getContact']);
Route::delete('delete_contact/{id}', [ContactController::class, 'deleteContact']);
Route::post('update_contact/{id}', [ContactController::class, 'updateContact']);

Route::get('items', [ItemController::class, 'sellItem']);
Route::post('saveitem', [ItemController::class, 'saveItem']);
Route::delete('deleteitem/{id}', [ItemController::class, 'deleteItem']);
