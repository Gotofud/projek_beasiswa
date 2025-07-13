<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ManagePeserta;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UniversitasController;
use App\Http\Middleware\role;
use Illuminate\Support\Facades\Route;



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin/Reviewer 
Route::prefix('admin')->as('admin.')->middleware(['auth', role::class])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('reviewer', ReviewerController::class);
    Route::resource('prodi', ProdiController::class);
    Route::resource('universitas', UniversitasController::class);
    Route::resource('peserta',ManagePeserta::class);
    Route::resource('dokumen',DokumenController::class);
    Route::resource('penilaian',PenilaianController::class);
});

// Route User
Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'middleware' => ['auth']
], function(){
    Route::resource('form-peserta',PesertaController::class);
    Route::resource('form-pendaftaran',PendaftaranController::class);
    Route::get('status',[StatusController::class,'index'])->name('user.status');
});