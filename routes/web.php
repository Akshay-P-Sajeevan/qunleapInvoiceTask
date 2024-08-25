<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Auth;

Route::resource('leads', LeadController::class);
Route::resource('proposals', ProposalController::class);
Route::resource('estimates', EstimateController::class);
Route::resource('invoices', InvoiceController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
