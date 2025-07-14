<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Auth;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $peserta = Peserta::where('user_id', $userId)->first();

        if ($peserta) {
            // Jika sudah mengisi, redirect atau tampilkan pesan
            return redirect('/')->with('error', 'Anda sudah mengisi data peserta.');
        }
        return view('user.form-peserta', compact('peserta'));
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
        $user = Auth::user()->id;
        $peserta = new Peserta();
        $peserta->user_id = $user;
        $peserta->nama_lengkap = $request->nama_lengkap;
        $peserta->nisn = $request->nisn;
        $peserta->nik = $request->nik;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->tempat_lahir = $request->tempat_lahir;
        $peserta->tanggal_lahir = $request->tanggal_lahir;
        $peserta->alamat = $request->alamat;
        $peserta->nama_sekolah = $request->nama_sekolah;
        $peserta->npsn = $request->npsn;
        $peserta->tahun_lulus = $request->tahun_lulus;
        $peserta->no_hp = $request->no_hp;
        $peserta->save();

        return redirect('/form-pendaftaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
