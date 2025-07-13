<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Seleksi;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Auth;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaian = Pendaftaran::where('status', 'diterima')->get();
        $hasil = Seleksi::all();
        return view('admin.penilaian.index', compact('penilaian','hasil'));
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
        // Ambil data pendaftaran
        $pendaftaran = Pendaftaran::with('ptn')->find($request->id_pendaftaran);
        $jalur = strtoupper($pendaftaran->jalur); // Misalnya: SNBT atau SNBP

        // Ambil data universitas terkait
        $universitas = $pendaftaran->ptn;

        // Tentukan nilai minimal berdasarkan jalur
        if ($jalur === 'SNBT') {
            $nilai_minimal = $universitas->minimal_nilai_utbk;
        } elseif ($jalur === 'SNBP') {
            $nilai_minimal = $universitas->minimal_nilai_snbp;
        } else {
            return back()->with('error', 'Jalur tidak valid.');
        }

        // Tentukan status lulus / tidak lulus
        $status = $request->nilai_total >= $nilai_minimal ? 'Lulus' : 'Tidak Lulus';

        // Simpan data seleksi
        $penilaian = new Seleksi();
        $user = Auth::user()->id;
        $penilaian->reviewer = $user;
        $penilaian->id_pendaftaran = $request->id_pendaftaran;
        $penilaian->nilai_total = $request->nilai_total;
        $penilaian->status_kelulusan = $status;
        $penilaian->save();
        return redirect()->route('admin.penilaian.index')->with('success','Berhasil Melakukan Seleksi');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
