@extends('layouts.user.user')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow-lg border-0">
                <div class="card-body p-0">
                    <!-- Header Struk -->
                    <div class="bg-dark text-white text-center py-3">
                        <h3 class="mb-0">STATUS SELEKSI</h3>
                    </div>
                    
                    <!-- Body Struk -->
                    <div class="p-4" style="background: #f8f9fa;">
                        
                        <!-- Info Peserta -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-5">KODE SELEKSI</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">SEL-2024-001</div>
                            </div>
                            <div class="row">
                                <div class="col-5">NAMA PESERTA</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">AHMAD FAUZI</div>
                            </div>
                            <div class="row">
                                <div class="col-5">UNIVERSITAS</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">ITB</div>
                            </div>
                            <div class="row">
                                <div class="col-5">PROGRAM STUDI</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">REKAYASA PERANGKAT LUNAK</div>
                            </div>
                        </div>
                        
                        <!-- Garis Pembatas -->
                        <div class="border-top py-2 ">
                           
                        </div>
                        

                        <!-- Total Nilai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-5">JALUR UJIAN/SELEKSI</div>
                                <div class="col-1">:</div>
                                <div class="col-6">SNBP</div>
                            </div>
                            <div class="row ">
                                <div class="col-5">NILAI TOTAL</div>
                                <div class="col-1">:</div>
                                <div class="col-6">85.75</div>
                            </div>
                        </div>
                        
                        <!-- Status -->
                        <div class="text-center mb-3">
                            <div class="bg-success p-3 rounded">
                                <h3 class="mb-0 text-white">✓ LULUS</h3>
                                <h6 class="text-white">Selamat! Anda dinyatakan LULUS</h6>
                            </div>
                        </div>
                        
                        <!-- Info Tambahan -->
                          <div class="mb-3">
                            <div class="row">
                                <div class="col-5">KODE SELEKSI</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">SEL-2024-001</div>
                            </div>
                            <div class="row">
                                <div class="col-5">NAMA PESERTA</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">AHMAD FAUZI</div>
                            </div>
                            <div class="row">
                                <div class="col-5">UNIVERSITAS</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">ITB</div>
                            </div>
                            <div class="row">
                                <div class="col-5">PROGRAM STUDI</div>
                                <div class="col-1">:</div>
                                <div class="col-6 fw-bold">REKAYASA PERANGKAT LUNAK</div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
            
            <!-- Tombol Aksi -->
            <div class="text-center mt-3">
                <button class="btn btn-primary me-2">
                    <i class="fas fa-download me-1"></i> Download PDF
                </button>
                <button class="btn btn-success">
                    <i class="fas fa-print me-1"></i> Print Struk
                </button>
            </div>
        </div>
    </div>
</div>



@endsection