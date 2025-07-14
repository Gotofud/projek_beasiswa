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
use App\Http\Controllers\WilayahController;
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
    Route::resource('peserta', ManagePeserta::class);
    Route::resource('dokumen', DokumenController::class);
    Route::resource('penilaian', PenilaianController::class);
    // Reviewer Export
    Route::get('/reviewer-export', [ReviewerController::class, 'export'])->name('reviewer.export');
    Route::get('/reviewer-exportPDF', [ReviewerController::class, 'exportPDF'])->name('reviewer.exportPDF');
    // Prodi Export
    Route::get('/prodi-export', [ProdiController::class, 'export'])->name('prodi.export');
    Route::get('/prodi-exportPDF', [ProdiController::class, 'exportPDF'])->name('prodi.exportPDF');
    // Universitas Export
    Route::get('/universitas-export', [UniversitasController::class, 'export'])->name('universitas.export');
    Route::get('/universitas-exportPDF', [UniversitasController::class, 'exportPDF'])->name('universitas.exportPDF');
    // Peserta Export
    Route::get('/peserta-export', [ManagePeserta::class, 'export'])->name('peserta.export');
    Route::get('/peserta-exportPDF', [ManagePeserta::class, 'exportPDF'])->name('peserta.exportPDF');
    Route::get('/biodata-exportPDF', [ManagePeserta::class, 'biodataPDF'])->name('peserta.biodataPDF');
    // Validasi Dokumen Export
    Route::get('/dokumen-export', [DokumenController::class, 'export'])->name('dokumen.export');
    Route::get('/dokumen-exportPDF', [DokumenController::class, 'exportPDF'])->name('dokumen.exportPDF');
    // Penilaian Export
    Route::get('/penilaian-export', [PenilaianController::class, 'export'])->name('penilaian.export');
    Route::get('/penilaian-exportPDF', [PenilaianController::class, 'exportPDF'])->name('penilaian.exportPDF');
});
// Get Kota
Route::get('/get-kota/{id_provinsi}', [WilayahController::class, 'getKota']);
// Route User
Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'middleware' => ['auth']
], function () {
    Route::resource('form-peserta', PesertaController::class);
    Route::resource('form-pendaftaran', PendaftaranController::class);
    Route::get('status', [StatusController::class, 'index'])->name('user.status');
    Route::get('/status-exportPDF', [StatusController::class, 'exportPDF'])->name('status.exportPDF');
});