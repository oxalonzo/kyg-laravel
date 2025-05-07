<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//guess-pages

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

//auth-user

//dashboard
Route::get('/dashboard', function () {
    return view('admin-pages/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//banner
Route::get('/banner', function () {
    return view('admin-pages/banner');
})->middleware(['auth', 'verified'])->name('banner.index');

//informacion-general
Route::get('/informacion', function () {
    return view('admin-pages/informacion');
})->middleware(['auth', 'verified'])->name('informacion.index');

//redes-sociales
Route::get('/Social', function () {
    return view('admin-pages/Social');
})->middleware(['auth', 'verified'])->name('Social.index');

//nuestra-historia
Route::get('/nuestra-historia', function () {
    return view('admin-pages/nuestra-historia');
})->middleware(['auth', 'verified'])->name('nuestra-historia.index');

//actividades
Route::get('/actividades-admin', function () {
    return view('admin-pages/actividades-admin');
})->middleware(['auth', 'verified'])->name('actividades.index');

//servicios
Route::get('/servicios-admin', function () {
    return view('admin-pages/servicios-admin');
})->middleware(['auth', 'verified'])->name('servicios.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
