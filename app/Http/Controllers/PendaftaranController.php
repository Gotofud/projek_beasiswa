<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universitas = Universitas::all();
        $pesertaId = Peserta::where('user_id', auth()->id())->value('id');
        $peserta = Pendaftaran::where('peserta_id', $pesertaId)->first();

        if ($peserta) {
            // Jika sudah mengisi, redirect atau tampilkan pesan
            return redirect('/')->with('error', 'Anda sudah mengisi data peserta.');
        }
        return view('user.form-pendaftaran',compact( 'universitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        $peserta = Peserta::where('user_id', auth()->id())->value('id');
        $pendaftaran->peserta_id = $peserta;
        $pendaftaran->jalur = $request->jalur ;
        $pendaftaran->ptn_dan_prodi = $request->ptn_dan_prodi;

        $lastRecord = Pendaftaran::latest('id')->first();
        $lastId = $lastRecord ? $lastRecord->id : 0;
        $kode_seleksi = 'UJN-' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        $pendaftaran->kode_seleksi = $kode_seleksi;

        // Kartu Identitas
        $kartuPatch = $pendaftaran->kartu_identitas;
        if ($request->hasFile('kartu_identitas')) {
            if ($pendaftaran->kartu_identitas) {
                Storage::disk('public')->delete($pendaftaran->kartu_identitas);
            }
            $kartuPatch = $request->file('kartu_identitas')->store('kartu_identitas', 'public');
        }
        $pendaftaran->kartu_identitas = $kartuPatch ;

        // Rapor
        $raporPatch = $pendaftaran->rapor;
        if ($request->hasFile('rapor')) {
            if ($pendaftaran->rapor) {
                Storage::disk('public')->delete($pendaftaran->rapor);
            }
            $raporPatch = $request->file('rapor')->store('rapor', 'public');
        }
        $pendaftaran->rapor = $raporPatch ;

        // Dokumen Prestasi
        $prestasiPatch = $pendaftaran->dokumen_prestasi;
        if ($request->hasFile('dokumen_prestasi')) {
            if ($pendaftaran->dokumen_prestasi) {
                Storage::disk('public')->delete($pendaftaran->dokumen_prestasi);
            }
            $prestasiPatch = $request->file('dokumen_prestasi')->store('dokumen_prestasi', 'public');
        }
        $pendaftaran->dokumen_prestasi = $prestasiPatch ;
        $pendaftaran->tanggal_daftar = now();
        $pendaftaran->reviewer = null;
        $pendaftaran->save();
        return redirect('/')->with('success','Semoga Beruntung');
    }
    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
