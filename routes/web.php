<?php

use App\Http\Controllers\KueTradisionalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [KueTradisionalController::class, 'index']);
Route::post('/tambah', [KueTradisionalController::class, 'store']);
Route::post('/edit/{id}', [KueTradisionalController::class, 'update']);
Route::get('/hapus/{id}', [KueTradisionalController::class, 'hapus']);