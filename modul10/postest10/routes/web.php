<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// Route::get('/pesan', [OrderController::class, 'showFormPesan'])->name('show-form-pesan');
Route::post('/submit-data', [OrderController::class, 'submitData'])->name('submit-data');

Route::get('/', function () {
    return view("pesan");// Ubah rute ke show-form-pesan
});
