<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController
};

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
//     return view('welcome');
// });
Route::get('/', function () {
	if(Auth()->User()){
		return Redirect()->Route('home');
	}else{
		return Redirect()->Route('login');
	}
    //return view('welcome');
})->name('index');
// Auth::routes();
// Route::group(['prefix'  =>  'auth'], function () {

//     Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
//     Route::post('login', [AuthController::class,'login'])->name('login.post');
//     Route::get('logout', [AuthController::class,'logout'])->name('logout');

//     Route::group(['middleware' => ['auth:user']], function () {

//         Route::get('/', function () {
//             return view('admin.dashboard.index');
//         })->name('admin.dashboard');

//     });
// });
// Route::view('/', 'admin.auth.login');
// Route::view('/admin', 'admin.dashboard.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
