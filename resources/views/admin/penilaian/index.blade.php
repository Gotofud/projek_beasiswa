@extends('layouts.admin.admin')
@section('content')
<div class="container-fluid">
    <!-- Sweetalert -->
    @include('layouts.admin.components.alert')
    <!-- End Sweetalert -->
    <!-- Header-->
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4"
        style="background-image: url('{{ asset('admin-asset/images/backgrounds/profilebg.jpg') }}')">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Penilaian Hasil Ujian</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none"
                                    href="{{ route('admin.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Penilaian Hasil Ujian</li>
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
    <!-- Form Penilaian -->
    @include('layouts.admin.modal.penilaian.add')
    <!-- End -->
    <!-- Action List -->
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div class="input-group mb-3 w-50">
                    <span class="input-group-text bg-white"><i class="ti ti-search"></i></span>
                    <input type="text" id="customSearch" class="form-control" placeholder="Cari Data...">
                </div>

                <div class="action">
                    <a type="button" class="btn btn-primary btn-md text-white" data-bs-toggle="modal"
                        data-bs-target="#add"><i class=" ti ti-folder-plus"></i></a>
                    <a href="#" type="button" class="btn btn-success btn-md text-white "><i
                            class=" ti ti-file-spreadsheet"></i>
                        Export Excel</a>
                    <a href="{{ route('admin.penilaian.exportPDF') }}" type="button" class="btn btn-danger btn-md text-white "><i class=" ti ti-file-text"></i>
                        Export PDF</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Action -->
    <!-- Table -->
    <div class="card">
        <div class="card-body">
            <!-- Table -->
            <div class="table-responsive mb-3">
                <table class="table table-striped table-bordered text-nowrap align-middle dataTable">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th>#</th>
                            <th>Kode Seleksi</th>
                            <th>Nama Lengkap</th>
                            <th>Jalur</th>
                            <th>Nilai Ujian</th>
                            <th>Universitas</th>
                            <th>Program Studi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <!-- start row -->
                        @foreach ($hasil as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->pendaftaran->kode_seleksi }}</td>
                            <td>{{ $data->pendaftaran->peserta->nama_lengkap }}</td>
                            <td>
                                <span
                                    class="badge 
                                                    {{ $data->pendaftaran->jalur == 'SNBT' ? 'bg-info' : 'bg-success' }}">
                                    {{ $data->pendaftaran->jalur }}
                                </span>
                            </td>
                            <td>{{ $data->nilai_total }}</td>
                            <td>{{ $data->pendaftaran->ptn->nama }}</td>
                            <td>{{ $data->pendaftaran->ptn->prodi->nama }}</td>
                            <td>
                                @if ($data->status_kelulusan === 'lulus')
                                    <span class="badge bg-success">LULUS</span>
                                @else
                                <span class="badge bg-danger">TIDAK LULUS</span>
                                @endiF
                            </td>
                            <td>
                                <form action="{{ route('admin.dokumen.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')"><i class="ti ti-trash"></i></button>
                                </form>
                            </td>
                        </tr>


                        @endforeach
                        <!-- end row -->
                    </tbody>
                </table>
            </div>

            <!-- end Zero Configuration -->
        </div>
    </div>
</div>
</div>
<!-- End Table -->
@endsection