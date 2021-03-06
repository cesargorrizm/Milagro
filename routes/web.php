<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactoController;
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
    return view('welcome');
});

/*
 * Home
 */
//Route::get('/', [HomeController::class, 'index'])->name('home');

/*
 * Contacto
 */
Route::post('/', [ContactoController::class, 'send'])->name('contactoWeb');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', function(){
    return view('layouts.admin');
})->name('admin');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){

    Route::resource('/roles', RoleController::class)->names('roles');

    Route::resource('/users', UserController::class)->except('show')->names('users');

});
