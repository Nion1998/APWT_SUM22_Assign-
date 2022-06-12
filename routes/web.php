<?php

use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class,'home'])->name('pages.home');
Route::get('/register',[PagesController::class,'register'])->name('pages.register');
Route::post('/register',[PagesController::class,'submit'])->name('pages.submit');
Route::get('/login',[PagesController::class,'login'])->name('pages.login');
Route::post('/login',[PagesController::class,'loginsubmit'])->name('pages.loginsubmit');
//Route::get('/dashbord',[PagesController::class,'admindashbord'])->name('admin.dashbord');
//Route::get('/dashbord',[PagesController::class,'userdashbord'])->name('Users.dashbord');
