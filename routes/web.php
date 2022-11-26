<?php

use App\Http\Controllers\forAuthentication;
use App\Http\Controllers\forDashboard;
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

Route::get('/', function () {
    return view('home');
});
Route::get('delete/{id}',[forDashboard::class,'delete']);
Route::get('/dashboard',[forDashboard::class,'dash'])->middleware(['auth']);
Route::post('/dashboard',[forDashboard::class,'saveFruit'])->name('saveFruit');
Route::get('/signup',[forAuthentication::class,'forSignup']);
Route::get('/login',[forAuthentication::class,'forLogin']);
Route::post('/login',[forAuthentication::class,'forLoginAuthentication'])->name('loginAdmin');
Route::post('/signup',[forAuthentication::class,'forSaveData'])->name('saveData');
