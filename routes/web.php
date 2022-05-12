<?php

use App\Http\Controllers\Admin\CapacidadController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactoAdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\HomeController;

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

// SECCIONES PÚBLICAS

/*
 * Home
 */
Route::get('/detalle', [DetalleController::class, 'detalle'])->name('detalle');
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
 * Contacto
 */
Route::post('/', [ContactoController::class, 'send'])->name('contactoWeb');


/*
 * Acceso a Administración
 */
Route::get('login_empresa', function () {
    return view('auth.login');
})->name('login_empresa');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Route::get('/admin', function(){
//    return view('layouts.admin');
//})->name('admin');


// PARTE ADMINISTRACIÓN

Route::get('/admin', function(){
    return view('layouts.admin');
})->name('admin');

Route::middleware(['auth:sanctum', 'verified', 'can:admin'])->get('login_empresa', function () {
    return view('layouts.admin');
})->name('admin');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){
    
 //Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::resource('/roles', RoleController::class)->names('roles');

    Route::resource('/users', UserController::class)->except('show')->names('users');
    
    Route::resource('/contacto', ContactoAdminController::class)->names('contacto');
    
    Route::resource('/tipo', TipoController::class)->names('tipo');

    Route::resource('/sector', SectorController::class)->names('sector');
    
    Route::resource('/capacidad', CapacidadController::class)->names('capacidad');

    Route::resource('/image', ImageController::class)->names('image');
    //Resto de rutas de Admin

});
    
// Route::get('patologia', 'PatologiaController@index')->name('patologia');
// Route::get('patologia/crear', 'PatologiaController@crear')->name('crear_patologia');
// Route::post('patologia', 'PatologiaController@guardar')->name('guardar_patologia');
// Route::get('patologia/{patologia}', 'PatologiaController@mostrar')->name('mostrar_patologia');
// Route::get('patologia/{patologia}/editar', 'PatologiaController@editar')->name('editar_patologia');
// Route::put('patologia/{patologia}', 'PatologiaController@actualizar')->name('actualizar_patologia');
// Route::delete('patologia/{patologia}', 'PatologiaController@eliminar')->name('eliminar_patologia');
