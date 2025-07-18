@extends('layouts.admin.admin')
@section('content')
    <div class="container-fluid">
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
                                    <a class="text-muted text-decoration-none"
                                        href="{{ route('admin.index') }}">Dashboard</a>
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

              <!-- Action List -->
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div class="input-group mb-3 w-50">
                        <span class="input-group-text bg-white"><i class="ti ti-search"></i></span>
                        <input type="text" id="customSearch" class="form-control" placeholder="Cari Data...">
                    </div>

                    <div class="action">
                        <a href="{{ route('admin.dokumen.export') }}" type="button" class="btn btn-success btn-md text-white "><i
                                class=" ti ti-file-spreadsheet"></i>
                            Export Excel</a>
                        <a href="{{ route('admin.dokumen.exportPDF') }}" type="button" class="btn btn-danger btn-md text-white "><i class=" ti ti-file-text"></i>
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
                                <th>Biodata</th>
                                <th>Dokumen</th>
                                <th>Reviewer</th>
                                <th>Action</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            @foreach ($dokumen as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->kode_seleksi }}</td>
                                    <td>{{ $data->peserta->nama_lengkap }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ $data->jalur == 'SNBT' ? 'bg-info' : 'bg-success' }}">
                                            {{ $data->jalur }}
                                        </span>
                                    </td>
                                    <td> <a type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#biodata-{{ $data->id }}">
                                            Cek Biodata
                                        </a>
                                    </td>
                                    <td> <a type="button" class="btn btn-sm btn-success" href="{{ route('admin.dokumen.show',$data->id) }}">
                                            Cek Dokumen
                                        </a>
                                    </td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>
                                        <form action="{{ route('admin.dokumen.destroy', $data->id) }}" method="POST">
                                            <a type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit-{{ $data->id }}">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')"><i class="ti ti-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Biodata Modal Form -->
                                @include('layouts.admin.modal.dokumen.biodata')
                                <!-- End Biodata Modal -->

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