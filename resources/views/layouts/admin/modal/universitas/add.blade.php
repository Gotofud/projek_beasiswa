<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="ti ti-category"></i> Tambah Program
                    Studi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Input Group -->
                <form action="{{ route('admin.universitas.store') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <input type="text" class="form-control" placeholder="Nama Prodi" aria-label="Username"
                            aria-describedby="basic-addon1" name="nama">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <input type="text" class="form-control" placeholder="Nama Prodi" aria-label="Username"
                            aria-describedby="basic-addon1" name="provinsi">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <input type="text" class="form-control" placeholder="Nama Prodi" aria-label="Username"
                            aria-describedby="basic-addon1" name="kota">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <select class="form-select" aria-label="Default select example" name="prodi_id">
                            <option>Select Category</option>
                            @foreach ($prodi as $datas)
                                <option value="{{ $datas->id}}" >
                                    {{ $datas->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <input type="number" class="form-control" placeholder="Nama Prodi" aria-label="Username"
                            aria-describedby="basic-addon1" name="minimal_nilai_utbk">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-folder"></i></span>
                        <input type="number" class="form-control" placeholder="Nama Prodi" aria-label="Username"
                            aria-describedby="basic-addon1" name="minimal_nilai_snbp">
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