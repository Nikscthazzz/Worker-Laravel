<?php

use App\Http\Controllers\loginAsset;
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

Route::get('/', [loginAsset::class, 'landing']);

Route::get('/login', [loginAsset::class, 'login']);
Route::post('/login', [loginAsset::class, 'loginPost']);

Route::get('/logout', [loginAsset::class, 'logout']);

Route::get('/hapusporto/{id}', [loginAsset::class, 'hapusPorto']);
Route::post('/tambahporto', [loginAsset::class, 'tambahPorto']);