<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

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
    return view('welcome');
});
Route::get('/operacionesSumar/{div1}/{div2}',[OperacionesController::class,'division']);
Route::get('/sumar/{sum1}/{sum2}',[OperacionesController::class,'sumar']);
Route::get('/restar/{rest}/{rest2}',[OperacionesController::class,'restar']);
Route::get('/multiplicar/{mult1}/{mult2}',[OperacionesController::class,'multiplicar']);
Route::get('/formulacuadratica/{a}/{b}/{c}', [OperacionesController::class, 'formulacuadratica']);
Route::get('/areacuadrado/{lado}', [OperacionesController::class, 'areaCuadrado']);
Route::get('/areaTriangulo/{base}/{altura}', [OperacionesController::class, 'areaTriangulo']);
Route::get('/areaRectangulo/{base}/{altura}', [OperacionesController::class, 'areaRectangulo']);
Route::get('/areaParalelogramo/{h}/{base}', [OperacionesController::class, 'areaParalelogramo']);
Route::get('/areaCirculo/{radio}', [OperacionesController::class, 'areaCirculo']);
Route::get('/areaTrapecio/{a}/{b}/{h}', [OperacionesController::class, 'areaTrapecio']);