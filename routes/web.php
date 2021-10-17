<?php

use App\Http\Controllers\CrudApplicaiton;
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
Route::get('/', [CrudApplicaiton::class,'getData']);
Route::get('create', [CrudApplicaiton::class,'create']);
Route::post('adduser', [CrudApplicaiton::class,'store']);

// Edite Route


Route::get('edite/{id}', [CrudApplicaiton::class,'edite']);

Route::post('update/{id}', [CrudApplicaiton::class,'update']);






