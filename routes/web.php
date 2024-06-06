<?php

use App\Http\Controllers\Blogs;
use App\Http\Controllers\Contactos;
use App\Http\Controllers\Distribuidores;
use App\Http\Controllers\Nosotros;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\Distribuidors;
use App\Http\Controllers\HomeController;
use App\Mail\Webcontacto;
use App\Http\Controllers\Mailwebcontacto;
use App\Http\Controllers\Usuarios;
use App\Http\Middleware\CrudMiddleware;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\NoMostrarFicha;

Route::get('/', [Welcome::class, 'welcome'])->name('welcome');

Route::get('/login', [LoginController::class, 'showLoginForm']);

Auth::routes(['except' => ['login']]);

Route::get('/home', [HomeController::class, 'index'])->middleware('can:home')->name('home');

// area de routeer para producto
    Route::get('/productos', [Productos::class, 'index'])->middleware('can:productoindex')->name('productoindex'); // Mostrar todos los productos
    Route::get('/productos/create', [Productos::class, 'create'])->middleware('can:productocreate')->name('productocreate'); // Formulario de creacion de los productos
    Route::get('/productos/{producto}/edit', [Productos::class, 'edit'])->middleware('can:productoedit')->name('productoedit'); // Formulario de creacion de los productos
    Route::get('/productos/{id}', [Productos::class, 'show'])->middleware('can:productoshow')->name('productoshow'); // Mostrar un cliente específico
    Route::post('/productos', [Productos::class, 'store'])->middleware('can:productostore')->name('productostore'); // Crear un nuevo cliente
    Route::put('/productos/{id}', [Productos::class, 'update'])->middleware('can:productoupdate')->name('productoupdate'); // Actualizar un cliente existente
    Route::delete('/productos/{id}/destroy', [Productos::class, 'destroy'])->middleware('can:productoeliminar')->name('productoeliminar'); // Eliminar un cliente

    //fin area para producto

    // area de routeer para distribuiodor
    Route::get('/distribuidor', [Distribuidors::class, 'index'])->middleware('can:distribuidorindex')->name('distribuidorindex'); // Mostrar todos los productos
    Route::get('/distribuidor/create', [Distribuidors::class, 'create'])->middleware('can:distribuidorcreate')->name('distribuidorcreate'); // Formulario de creacion de los productos
    Route::get('/distribuidor/{distribuidor}/edit', [Distribuidors::class, 'edit'])->middleware('can:distribuidoredit')->name('distribuidoredit'); // Formulario de creacion de los productos
    Route::get('/distribuidor/{id}', [Distribuidors::class, 'show'])->middleware('can:distribuidorshow')->name('distribuidorshow'); // Mostrar un cliente específico
    Route::post('/distribuidor', [Distribuidors::class, 'store'])->middleware('can:distribuidorstore')->name('distribuidorstore'); // Crear un nuevo cliente
    Route::put('/distribuidor/{id}', [Distribuidors::class, 'update'])->middleware('can:distribuidorupdate')->name('distribuidorupdate'); // Actualizar un cliente existente
    Route::delete('/distribuidor/{id}/destroy', [Distribuidors::class, 'destroy'])->middleware('can:distribuidoreliminar')->name('distribuidoreliminar'); // Eliminar un cliente

    // area de routeer para blogs
    Route::get('/blog', [Blogs::class, 'index'])->middleware('can:blogindex')->name('blogindex'); // Mostrar todos los productos
    Route::get('/blog/create', [Blogs::class, 'create'])->middleware('can:blogcreate')->name('blogcreate'); // Formulario de creacion de los productos
    Route::get('/blog/{blog}/edit', [Blogs::class, 'edit'])->middleware('can:blogedit')->name('blogedit'); // Formulario de creacion de los productos
    Route::get('/blog/{id}', [Blogs::class, 'show'])->middleware('can:blogshow')->name('blogshow'); // Mostrar un cliente específico
    Route::post('/blog', [Blogs::class, 'store'])->middleware('can:blogstore')->name('blogstore'); // Crear un nuevo cliente
    Route::put('/blog/{id}', [Blogs::class, 'update'])->middleware('can:blogupdate')->name('blogupdate'); // Actualizar un cliente existente
    Route::delete('/blog/{id}/destroy', [Blogs::class, 'destroy'])->middleware('can:blogeliminar')->name('blogeliminar'); // Eliminar un cliente
    //fin area para producto


Route::get('/nosotros', [Nosotros::class, 'nosotros'])->name('nosotros');
Route::get('/contactos', [Contactos::class, 'contactos'])->name('contactos');

Route::post('/mostrar-ficha/{archivo}', [FichaController::class, 'mostrarficha'])->name('mostrar-ficha');

Route::get('/nomostrarficha', [NoMostrarFicha::class, 'nomostrarficha'])->name('nomostrarficha');


Route::post('/web', [Mailwebcontacto::class, 'enviarCorreo'])->name('enviarcorreo');
Route::get('/distribuidor2', [Distribuidors::class, 'distribuidor2'])->name('distribuidor2');
Route::get('/productos2', [Productos::class, 'productos'])->name('productos2');
Route::get('/distribuidores', [Distribuidors::class, 'distribuidores'])->name('distribuidores');

// area de routeer para usuarios
Route::get('/usuarios', [Usuarios::class, 'index'])->middleware('can:userindex')->name('userindex'); // Mostrar todos los productos
Route::get('/usuarios/create', [Usuarios::class, 'create'])->middleware('can:usercreate')->name('usercreate'); // Formulario de creacion de los productos
Route::get('/usuarios/{producto}/edit', [Usuarios::class, 'edit'])->middleware('can:useredit')->name('useredit'); // Formulario de creacion de los productos
Route::get('/usuarios/{id}', [Usuarios::class, 'show'])->middleware('can:usershow')->name('usershow'); // Mostrar un cliente específico
Route::post('/usuarios', [Usuarios::class, 'store'])->middleware('can:userstore')->name('userstore'); // Crear un nuevo cliente
Route::put('/usuarios/{id}', [Usuarios::class, 'update'])->middleware('can:userupdate')->name('userupdate'); // Actualizar un cliente existente
Route::delete('/usuarios/{id}/destroy', [Usuarios::class, 'destroy'])->middleware('can:usereliminar')->name('usereliminar'); // Eliminar un cliente
