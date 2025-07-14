<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Font Awesome CDN (versi 6) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body p-0">
                        <!-- Header Struk -->
                        <div class="bg-primary text-white text-center py-4">
                            <h2 class="mb-0 fw-bold">STATUS SELEKSI</h2>
                            <p class="mb-0 mt-2 opacity-75">Hasil Seleksi Calon Mahasiswa</p>
                        </div>

                        <!-- Body Struk -->
                        <div class="p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">

                            <!-- Info Peserta Card -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-primary mb-3">
                                        <i class="fas fa-user-circle me-2"></i>Informasi Peserta
                                    </h5>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">KODE SELEKSI</label>
                                                <div class="fw-bold fs-6">{{ $hasil->pendaftaran->kode_seleksi }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">NAMA PESERTA</label>
                                                <div class="fw-bold fs-6">
                                                    {{ $hasil->pendaftaran->peserta->nama_lengkap }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">UNIVERSITAS</label>
                                                <div class="fw-bold fs-6">{{ $hasil->pendaftaran->ptn->nama }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">PROGRAM STUDI</label>
                                                <div class="fw-bold fs-6">{{ $hasil->pendaftaran->ptn->prodi->nama }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hasil Seleksi Card -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-primary mb-3">
                                        <i class="fas fa-chart-line me-2"></i>Hasil Seleksi
                                    </h5>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">JALUR UJIAN/SELEKSI</label>
                                                <div class="fw-bold fs-6">
                                                    <span
                                                        class="badge bg-info text-dark">{{ $hasil->pendaftaran->jalur }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <label class="form-label text-muted small">NILAI TOTAL</label>
                                                @if ($hasil->nilai_total == null)
                                                    <div class="fw-bold fs-5 text-primary">Sedang Di Proses</div>
                                                @else
                                                    <div class="fw-bold fs-5 text-primary">{{ $hasil->nilai_total }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Status Kelulusan -->
                            @if ($hasil->pendaftaran->status == "diproses")
                                <div class="alert alert-warning border-0 shadow-sm mb-4" role="alert">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="alert-heading mb-1">
                                                <i class="fas fa-clock me-2"></i>DOKUMEN SEDANG DIPROSES
                                            </h5>
                                            <p class="mb-0">Harap menunggu, dokumen Anda sedang dalam tahap verifikasi</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($hasil->pendaftaran->status == "ditolak")
                                    <div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h5 class="alert-heading mb-1">
                                                    <i class="fas fa-exclamation-triangle me-2"></i>DOKUMEN DITOLAK
                                                </h5>
                                                <p class="mb-0">Dokumen anda telah di verifikasi, Silahkan edit</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @elseif ($hasil->status_kelulusan == "lulus")
                                <div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
                                    <div class="text-center py-3">
                                        <div class="mb-3">
                                            <i class="fas fa-check-circle fa-4x text-success"></i>
                                        </div>
                                        <h3 class="alert-heading mb-3 text-success">
                                            <i class="fas fa-graduation-cap me-2"></i>SELAMAT! ANDA DINYATAKAN LULUS
                                        </h3>
                                        <p class="mb-0 fs-6">
                                            Selamat kepada calon mahasiswa Indonesia yang lulus melalui seleksi
                                            <strong>{{ $hasil->pendaftaran->jalur }}</strong>
                                        </p>
                                        <div class="mt-3">
                                            <span class="badge bg-success fs-6 px-3 py-2">
                                                <i class="fas fa-star me-1"></i>LULUS
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">
                                    <div class="text-center py-3">
                                        <div class="mb-3">
                                            <i class="fas fa-times-circle fa-4x text-danger"></i>
                                        </div>
                                        <h3 class="alert-heading mb-3 text-danger">
                                            <i class="fas fa-exclamation-triangle me-2"></i>ANDA DINYATAKAN TIDAK LULUS
                                        </h3>
                                        <p class="mb-0 fs-6">
                                            Jangan putus asa dan tetap semangat untuk kesempatan berikutnya
                                        </p>
                                        <div class="mt-3">
                                            <span class="badge bg-danger fs-6 px-3 py-2">
                                                <i class="fas fa-times me-1"></i>TIDAK LULUS
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>