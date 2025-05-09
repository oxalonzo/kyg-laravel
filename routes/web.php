<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformacionGeneralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedSocialController;
use Illuminate\Support\Facades\Route;


//guest-pages---------------------------------------------------------------


Route::get('/', function () {
    return view('guest-pages/home');
})->name('home');

Route::get('/nosotros', function () {
    return view('guest-pages/nosotros');
})->name('nosotros');

Route::get('/actividades', function () {
    return view('guest-pages/actividades');
})->name('actividades');

Route::get('/servicios', function () {
    return view('guest-pages/servicios');
})->name('servicios');

Route::get('/politicas', function () {
    return view('guest-pages/politicas');
})->name('politicas');

Route::get('/contacto', function () {
    return view('guest-pages/contacto');
})->name('contacto');


//auth-user--------------------------------------------------------------


//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// //banner
// Route::get('/banner', [BannerController::class, 'index'])->middleware(['auth', 'verified'])->name('banner.index');
// Route::get('/banner/create', [BannerController::class, 'create'])->middleware(['auth', 'verified'])->name('banner.create');
// Route::post('/banner/store', [BannerController::class, 'store'])->middleware(['auth', 'verified'])->name('banner.store');
// // Ruta para mostrar el formulario de edición de un banner
// Route::get('/banner/{id}/edit', [BannerController::class, 'edit'])->middleware(['auth', 'verified'])->name('banner.edit');
// // Ruta para actualizar el banner (POST que hace PUT)
// Route::put('/banner/{id}', [BannerController::class, 'update'])->middleware(['auth', 'verified'])->name('banner.update');
// // Ruta para eliminar el banner
// Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('banner.destroy');


 // Grupo de rutas protegidas por middleware 'auth' y 'verified'
Route::middleware(['auth', 'verified'])->group(function () {
    //banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
});

//informacion-general
Route::middleware(['auth', 'verified'])->group(function () {
    //banner
    Route::get('/informacion', [InformacionGeneralController::class, 'index'])->name('informacion.index');
    Route::get('/informacion/create', [InformacionGeneralController::class, 'create'])->name('informacion.create');
    Route::post('/informacion/store', [InformacionGeneralController::class, 'store'])->name('informacion.store');
    Route::get('/informacion/{id}/edit', [InformacionGeneralController::class, 'edit'])->name('informacion.edit');
    Route::put('/informacion/{id}', [InformacionGeneralController::class, 'update'])->name('informacion.update');
    Route::delete('/informacion/{id}', [InformacionGeneralController::class, 'destroy'])->name('informacion.destroy');
});

//redes-sociales
Route::get('/Social', [RedSocialController::class, 'index'])->middleware(['auth', 'verified'])->name('Social.index');

//nuestra-historia
Route::get('/nuestra-historia', [RedSocialController::class, 'index'])->middleware(['auth', 'verified'])->name('nuestra-historia.index');

//actividades
Route::get('/actividades-admin', [RedSocialController::class, 'index'])->middleware(['auth', 'verified'])->name('actividades-admin.index');

//servicios
Route::get('/servicios-admin', [RedSocialController::class, 'index'])->middleware(['auth', 'verified'])->name('servicios.index');


//profile--------------------------------------------------------------------------------------


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
