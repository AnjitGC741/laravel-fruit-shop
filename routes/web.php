<?php

use App\Http\Controllers\forAuthentication;
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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth']);
Route::get('/',[forAuthentication::class,'dash'])->middleware(['auth']);
Route::get('/signup',[forAuthentication::class,'forSignup']);
Route::get('/login',[forAuthentication::class,'forLogin']);
Route::post('/login',[forAuthentication::class,'forLoginAuthentication'])->name('loginAdmin');
Route::post('/signup',[forAuthentication::class,'forSaveData'])->name('saveData');
