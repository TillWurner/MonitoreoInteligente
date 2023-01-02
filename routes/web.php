<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ParqueoController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\UserController;
use App\Models\Parqueo;

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
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'main'])->name('base'); */
Route::get('/contactus', [ContactusController::class, 'contactus'])->name('contactus');
Route::get('/parking/registration',[ParqueoController::class,'registration'])->name('parking.registration');

Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/userlist', [UserController::class, 'index'])->name('user.index');
Route::get('user/informacion/{id}', [UserController::class, 'informacion'])->name('user.informacion');

Route::get('parqueo/index/{id}', [ParqueoController::class, 'indexparqueouser'])->name('parqueo.userindex');



Route::get('parqueo/create/{id}', [ParqueoController::class, 'create'])->name('parqueo.create');
Route::post('parqueo/store', [ParqueoController::class, 'store'])->name('parqueo.store');

Route::get('planta/create/{id}', [PlantaController::class, 'create'])->name('planta.create');
Route::post('planta/store', [PlantaController::class, 'store'])->name('planta.store');
