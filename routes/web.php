<?php


use App\Http\Controllers\StoreController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('home');
  });

  Route::get('nearbyStores', function () {
    return view('nearbyStores');
  });

  Route::get('login', function () {
    return view('login');
  });

  Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
  Route::get('/nearbyStores', [LoginController::class, 'nearbyStores'])->name('nearbyStores');

  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

 

Route::get('/adminadd', [StoreController::class, 'index'])->name('adminadd.index');
Route::post('/adminadd', [StoreController::class, 'store'])->name('adminadd.store');
Route::get('/adminview', [StoreController::class, 'view'])->name('adminadd.view');

Route::get('/adminedit/{id}', [StoreController::class, 'edit'])->name('adminadd.edit');
Route::post('/adminadd/{id}', [StoreController::class, 'update'])->name('adminadd.update');
Route::delete('/adminadd/{id}', [StoreController::class, 'destroy'])->name('adminadd.destroy');

Route::post('/nearbyStores', [StoreController::class, 'showNearbyStores'])->name('nearbyStores.store');
