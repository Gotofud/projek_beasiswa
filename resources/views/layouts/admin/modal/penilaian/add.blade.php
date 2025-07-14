<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="ti ti-users"></i> Penilaian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Input Group -->
                <form action="{{ route('admin.penilaian.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <select name="id_pendaftaran" class="form-control selectProdi">
                            <option selected disabled>Pilih Pendaftar</option>
                            @foreach ($penilaian as $data)
                            @if ($data->status == 'diterima')
                            <option value="{{ $data->id }}">{{ $data->peserta->nama_lengkap }} -
                                    {{ $data->kode_seleksi }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="number" class="form-control" placeholder="Total nilai" aria-label="Email"
                            aria-describedby="basic-addon1" name="nilai_total">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy"></i>Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
</div>