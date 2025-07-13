@extends('layouts.admin.admin')
@section('content')
    <!-- Sweetalert -->
    @include('layouts.admin.components.alert')
    <!-- End Sweetalert -->
    <!-- Header-->
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4"
        style="background-image: url('{{ asset('admin-asset/images/backgrounds/profilebg.jpg') }}')">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Validasi Dokumen</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('admin.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Validasi Dokumen</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin-asset/images/breadcrumb/ChatBc.png') }}" alt="modernize-img"
                            class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div class="row">
        {{-- Rapor --}}
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header font-weight-bold">Rapor</div>
                <div class="card-body">
                    <iframe src="{{ asset('storage/' . $dokumen->rapor) }}" frameborder="0" width="100%"
                        height="500px"></iframe>
                </div>
            </div>
        </div>

        {{-- Kartu Identitas --}}
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header font-weight-bold">Kartu Identitas</div>
                <div class="card-body">
                    <iframe src="{{ asset('storage/' . $dokumen->kartu_identitas) }}" frameborder="0" width="100%"
                        height="500px"></iframe>
                </div>
            </div>
        </div>

        {{-- Dokumen Prestasi --}}
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header font-weight-bold">Dokumen Prestasi</div>
                <div class="card-body">
                    <iframe src="{{ asset('storage/' . $dokumen->dokumen_prestasi) }}" frameborder="0" width="100%"
                        height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.dokumen.update', $dokumen->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-7">
                    <h4 class="card-title">Status</h4>
                    <div class="p-2 h-100 bg-success rounded-circle"></div>
                </div>
                <form action="" class="form-horizontal">
                    <div>
                        <select class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" name="status">
                            <option selected disabled>Pilih</option>
                            <option value="diterima">Di Terima</option>
                            <option value="ditolak">Di Tolak</option>
                        </select>
                        <p class="fs-2 mb-0">
                            Pilih status setelah melakukan Validasi
                        </p>
                    </div><button type="submit" class="btn btn-primary">Ubah</button>

                </form>
            </div>
        </div>
    </form>

@endsection