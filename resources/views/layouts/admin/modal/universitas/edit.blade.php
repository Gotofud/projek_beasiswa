<div class="modal fade" id="edit-{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan modal-lg untuk ruang lebih lebar -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="ti ti-category"></i> Tambah Universitas
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.universitas.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama_universitas" class="form-label">Nama Universitas</label>
                        <input type="text" class="form-control" name="nama" id="nama_universitas"
                            placeholder="Nama Universitas" value="{{ $data->nama }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <select class="form-select select-provinsi" id="provinsi-{{ $data->id }}"
                                data-id="{{ $data->id }}" name="provinsi">
                                <option disabled {{ $data->provinsi ? '' : 'selected' }}>Pilih Provinsi</option>
                                @foreach($provinsi as $dataProv)
                                    <option value="{{ $dataProv->id }}" {{ $dataProv->id == $data->provinsi->id ? 'selected' : '' }}>
                                        {{ $dataProv->provinsi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <select class="form-select select-kota" id="kota-{{ $data->id }}" name="kota"
                                data-id="{{ $data->id }}">
                                @if ($data->kota_relasi)
                                    <option value="{{ $data->kota }}" selected>{{ $data->kota_relasi->kota }}</option>
                                @else
                                    <option disabled selected>Pilih Kota</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="prodi_id" class="form-label">Program Studi</label>
                        <select class="form-select selectProdi" id="prodi-{{ $data->id }}" name="prodi_id"
                            data-id="{{ $data->id }}">
                            <option selected disabled>Pilih Program Studi</option>
                            @foreach ($prodi as $datas)
                                <option value="{{ $datas->id }}" {{ $datas->id == $data->prodi_id ? 'selected' : '' }}>
                                    {{ $datas->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_prodi" class="form-label">Kode Prodi</label>
                            <input type="text" class="form-control" name="kode_prodi" id="kode_prodi"
                                placeholder="Contoh: TI-01" value="{{ $data->kode_prodi }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="minimal_nilai_utbk" class="form-label">Minimal Nilai UTBK</label>
                            <input type="number" class="form-control" name="minimal_nilai_utbk" id="minimal_nilai_utbk"
                                placeholder="Contoh: 750" value="{{ $data->minimal_nilai_utbk }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="minimal_nilai_snbp" class="form-label">Minimal Nilai SNBP</label>
                        <input type="number" class="form-control" name="minimal_nilai_snbp" id="minimal_nilai_snbp"
                            placeholder="Contoh: 85" value="{{ $data->minimal_nilai_snbp }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-device-floppy"></i> Simpan
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>