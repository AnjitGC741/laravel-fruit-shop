<?php

use App\Http\Controllers\forAuthentication;
use App\Http\Controllers\forDashboard;
use App\Http\Controllers\home;
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

Route::get('/',[home::class,'fruitList']);
Route::post('/',[home::class,'searchFruit'])->name('searchFruit');
Route::get('/dashboard',[forDashboard::class,'dash'])->middleware(['auth']);
Route::get('/trash',[forDashboard::class,'trash']);
Route::post('/dashboard1',[forDashboard::class,'saveFruit'])->name('saveFruit');
Route::post('/dashboard',[forDashboard::class,'editFruit'])->name('editFruit');
Route::get('delete/{id}',[forDashboard::class,'delete']);
Route::get('restore/{id}',[forDashboard::class,'restore']);
Route::get('forceDelete/{id}',[forDashboard::class,'forceDelete']);
Route::get('editFruit/{id}',[forDashboard::class,'forEditFruit']);
Route::get('/signup',[forAuthentication::class,'forSignup'])->name('forSignup');
Route::post('/signup',[forAuthentication::class,'forSaveData'])->name('saveData');
Route::get('/login',[forAuthentication::class,'forLogin'])->name('forLogin');
Route::post('/login',[forAuthentication::class,'forLoginAuthentication'])->name('loginAdmin');
Route::get('logout', [forAuthentication::class, 'logout'])->name('logout');
