<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\InscriptionReservationController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route pour la page d'accueil
Route::get('/', [IndexController::class, 'index'])->name('index');

// Route pour la réservation
Route::prefix('/reservation')->group(function () {
    Route::get('/step1', [ReservationController::class, 'step1'])->name('reservation.step1'); // Première étape
    Route::post('/step1', [ReservationController::class, 'postStep1'])->name('reservation.postStep1'); // Soumission de la première étape
    Route::get('/step2', [ReservationController::class, 'step2'])->name('reservation.step2'); // Deuxième étape
    Route::post('/step2', [ReservationController::class, 'postStep2'])->name('reservation.postStep2'); // Soumission de la deuxième étape
});

// Route pour le formulaire d'inscription à la réservation
Route::get('/inscription-reservation', [InscriptionReservationController::class, 'showForm'])->name('register.form');
Route::post('/inscription-reservation', [InscriptionReservationController::class, 'store'])->name('register.reservation');