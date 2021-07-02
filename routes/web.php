<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AeroportController;
use App\Http\Controllers\CompagnieController;
use App\Http\Controllers\VolController;
use App\Http\Controllers\RechercheController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::post('/recherche', [RechercheController::class,'recherche']);

Route::get('/airport', [AeroportController::class,'create']);
Route::get('/airport/list', [AeroportController::class,'index']);
Route::get('/airport/edit/{id}',[AeroportController::class,'edit']);
Route::get('/airport/delete/{id}',[AeroportController::class,'destroy']);
Route::post('/airport/create', [AeroportController::class,'create']);
Route::post('/airport/store', [AeroportController::class,'store']);
Route::post('/airport/update', [AeroportController::class,'update']);

Route::get('/compagnie', [CompagnieController::class,'create']);
Route::get('/compagnie/list', [CompagnieController::class,'index']);
Route::get('/compagnie/edit/{id}',[CompagnieController::class,'edit']);
Route::get('/compagnie/delete/{id}',[CompagnieController::class,'destroy']);
Route::post('/compagnie/create', [CompagnieController::class,'create']);
Route::post('/compagnie/store', [CompagnieController::class,'store']);
Route::post('/compagnie/update', [CompagnieController::class,'update']);

Route::get('/vol', [VolController::class,'create']);
Route::get('/vol/list', [VolController::class,'index']);
Route::get('/vol/edit/{id}',[VolController::class,'edit']);
Route::get('/vol/delete/{id}',[VolController::class,'destroy']);
Route::post('/vol/create', [VolController::class,'create']);
Route::post('/vol/store', [VolController::class,'store']);
Route::post('/vol/update', [VolController::class,'update']);

require __DIR__.'/auth.php';
