<div class="modal fade" id="biodata-{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="biodataLabel-{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="biodataLabel-{{ $data->id }}">
                    <i class="ti ti-clipboard"></i> Biodata Peserta
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->nama_lengkap }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jenis Kelamin</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->jenis_kelamin }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NISN</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->nisn }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NIK</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->nik }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">No HP</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->no_hp }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->tempat_lahir }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->tanggal_lahir }}" disabled>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Alamat</label>
                        <textarea class="form-control" rows="2" disabled>{{ $data->peserta->alamat }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->nama_sekolah }}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">NPSN</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->npsn }}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Tahun Lulus</label>
                        <input type="text" class="form-control" value="{{ $data->peserta->tahun_lulus }}" disabled>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('admin.peserta.biodataPDF', $data->id) }}" type="button"
                    class="btn btn-danger btn-md text-white "><i class=" ti ti-file-text"></i>
                    Export PDF</a>
            </div>
        </div>
    </div>
</div>