<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludarController;

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

Route::get('/star', function () {
    return view('welcome');
})->middleware('acceso');


// Route::get('/producto', [ProductoController::class, 'index']);
// Route::post('/producto', [ProductoController::class, 'store']);
// Route::put('/producto/{id}', [ProductoController::class, 'update']);
// Route::delete('/producto/{id}', [ProductoController::class, 'destroy']);


    Route::resource('/producto', ProductoController::class)->only(['index', 'store', 'update', 'destroy']);




Route::get('/productos', function (){
return view ('productos');
});
