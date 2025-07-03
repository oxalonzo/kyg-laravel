<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Guest\ActividadGuestController;
use App\Http\Controllers\Guest\NosotrosController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\serviciosInfoController;
use App\Http\Controllers\InformacionGeneralController;
use App\Http\Controllers\NuestraHistoriaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedSocialController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;


//guest-pages---------------------------------------------------------------


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');


Route::get('/actividades', [ActividadGuestController::class, 'index'])->name('actividades');


Route::get('/servicio', [serviciosInfoController::class, 'index'])->name('servicio');


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
    //informacion general 
    Route::get('/informacion', [InformacionGeneralController::class, 'index'])->name('informacion.index');
    Route::get('/informacion/create', [InformacionGeneralController::class, 'create'])->name('informacion.create');
    Route::post('/informacion/store', [InformacionGeneralController::class, 'store'])->name('informacion.store');
    Route::get('/informacion/{id}/edit', [InformacionGeneralController::class, 'edit'])->name('informacion.edit');
    Route::put('/informacion/{id}', [InformacionGeneralController::class, 'update'])->name('informacion.update');
    Route::delete('/informacion/{id}', [InformacionGeneralController::class, 'destroy'])->name('informacion.destroy');
});

//redes-sociales
Route::middleware(['auth', 'verified'])->group(function () {
    //red social
    Route::get('/Social', [RedSocialController::class, 'index'])->name('Social.index');
    Route::get('/Social/create', [RedSocialController::class, 'create'])->name('Social.create');
    Route::post('/Social/store', [RedSocialController::class, 'store'])->name('Social.store');
    Route::get('/Social/{id}/edit', [RedSocialController::class, 'edit'])->name('Social.edit');
    Route::put('/Social/{id}', [RedSocialController::class, 'update'])->name('Social.update');
    Route::delete('/Social/{id}', [RedSocialController::class, 'destroy'])->name('Social.destroy');
});

//historia
Route::middleware(['auth', 'verified'])->group(function () {
    //red social
    Route::get('/historia', [NuestraHistoriaController::class, 'index'])->name('historia.index');
    Route::get('/historia/create', [NuestraHistoriaController::class, 'create'])->name('historia.create');
    Route::post('/historia/store', [NuestraHistoriaController::class, 'store'])->name('historia.store');
    Route::get('/historia/{id}/edit', [NuestraHistoriaController::class, 'edit'])->name('historia.edit');
    Route::put('/historia/{id}', [NuestraHistoriaController::class, 'update'])->name('historia.update');
    Route::delete('/historia/{id}', [NuestraHistoriaController::class, 'destroy'])->name('historia.destroy');
});

//actividades
// Route::get('/actividades-admin', [ActividadController::class, 'index'])->middleware(['auth', 'verified'])->name('actividades-admin.index');
Route::middleware(['auth', 'verified'])->group(function () {
    //red social
    Route::get('/actividades-admin', [ActividadController::class, 'index'])->name('actividades-admin.index');
    Route::get('/actividades-admin/create', [ActividadController::class, 'create'])->name('actividades-admin.create');
    Route::post('/actividades-admin/store', [ActividadController::class, 'store'])->name('actividades-admin.store');
    Route::get('/actividades-admin/{id}/edit', [ActividadController::class, 'edit'])->name('actividades-admin.edit');
    Route::put('/actividades-admin/{id}', [ActividadController::class, 'update'])->name('actividades-admin.update');
    Route::delete('/actividades-admin/{id}', [ActividadController::class, 'destroy'])->name('actividades-admin.destroy');
    // Eliminar solo un archivo multimedia asociado a una actividad
Route::delete('/actividades-admin/media/{id}', [ActividadController::class, 'eliminarMedia'])->name('actividades-admin.media.destroy');
});

//servicios

Route::middleware(['auth', 'verified'])->group(function () {
    //red social
    Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
    Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
    Route::post('/servicios/store', [ServicioController::class, 'store'])->name('servicios.store');
    Route::get('/servicios/{id}/edit', [ServicioController::class, 'edit'])->name('servicios.edit');
    Route::put('/servicios/{id}', [ServicioController::class, 'update'])->name('servicios.update');
    Route::delete('/servicios/{id}', [ServicioController::class, 'destroy'])->name('servicios.destroy');
});

//profile--------------------------------------------------------------------------------------


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
