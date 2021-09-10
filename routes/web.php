<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PasseSanitaireController;

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

Auth::routes();

Route::get('/admins', [App\Http\Controllers\HomeController::class, 'index'])->name('admins');
Route::get('/admins/{admin}', [App\Http\Controllers\HomeController::class, 'show'])->name('admins.show');
Route::get('/admins/{admin}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('admins.destroy');

  
Route::resource('passe_sanitaires', PasseSanitaireController::class);
  
Route::resource('admins', HomeController::class);

