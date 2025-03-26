<?php

use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/partners/create', [PartnerController::class, 'store'])->name('partners.store');
Route::get('/partners/edit/{partner}', [PartnerController::class, 'edit'])->name('partners.edit');
Route::post('/partners/edit/{partner}', [PartnerController::class, 'update'])->name('partners.update');
