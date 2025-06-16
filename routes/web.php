<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\HomeController; 
use App\Http\Controllers\NinoController; 
use App\Http\Controllers\AutorizadoController; 
use App\Http\Controllers\EnfermedadeController; 
use App\Http\Controllers\InscripcioneController; 
use App\Http\Controllers\ProgramaController; 
use App\Http\Controllers\TutoreController; 


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});



Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Dashboard principal del admin (si lo tienes, apuntando a una vista)
    // Este es el URL por defecto de tu sidebar de AdminLTE para 'Dashboard'
    Route::get('/', function () {
        return view('admin.dashboard'); // Asegúrate de que esta vista exista (resources/views/admin/dashboard.blade.php)
    })->name('admin.dashboard');


    // Rutas de Recurso para tus tablas de administración
    Route::resource('ninos', NinoController::class);
    Route::resource('autorizados', AutorizadoController::class);
    Route::resource('enfermedades', EnfermedadeController::class);
    Route::resource('inscripciones', InscripcioneController::class);
    Route::resource('programas', ProgramaController::class);
    Route::resource('tutores', TutoreController::class);

    // Si tienes una ruta 'pages' para tu menú de AdminLTE
    // Route::resource('pages', PageController::class); // Descomenta y crea PageController si lo necesitas
});


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
