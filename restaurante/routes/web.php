<?php

use App\Http\Controllers\contactFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservationController;
Route::get('/', function () {
    return view('welcome');
});
//ruta que conduce al login para no tener los botones de regsitro
Route::get('/private', function(){
    return view('private');
})->name('private');

Route::get(('/home'), function () {
    return view('home');     //función que retorna la vista home.blade.php, que es la página principal del admin
})->middleware(['auth'])->name('home');


//ruta del cliente o guest que ve el frontend
Route::get('/guest', function () {
    return view('guest');
})->name('guest');
//ruta del menu del restaurante
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

//ruta del cliente para crear una reserva
Route::get('/reserve', [ReservationController::class, 'create'])->name('reservation'); //17/10/25 ruta funciona
Route::post('/reserve', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
//ruta de contacto con la empresa
Route::get('/contacto',[contactFormController::class,'create'])->name('contact.create');
Route::post('/contacto',[contactFormController::class,'store'])->name('contact.store');

//ruta de crud relacionado con los clientes
Route::resource('customers', CustomerController::class)->middleware('auth');
//ruta de crud relacionado con los ítems del menú
Route::resource('items', ItemController::class)->middleware('auth');
//ruta de crud relacionado con las ordenes fisicas en restaurante
Route::resource('orders', OrderController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
