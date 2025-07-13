<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Prodi;
use App\Models\Provinsi;
use App\Models\Universitas;
use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $uni = Universitas::all();
        $prodi = Prodi::all();
        $provinsi = Provinsi::all();

        return view('admin.universitas.index', compact('uni', 'prodi','provinsi'));
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
        $uni = new Universitas();
        $uni->nama = $request->nama;
        $uni->kota = $request->kota;
        $uni->provinsi = $request->provinsi;
        $uni->kode_prodi = $request->kode_prodi;
        $uni->prodi_id = $request->prodi_id;
        $uni->minimal_nilai_utbk = $request->minimal_nilai_utbk;
        $uni->minimal_nilai_snbp = $request->minimal_nilai_snbp;
        $uni->save();

        return redirect()->route('admin.universitas.index')->with('success','Data Universitas berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Universitas $universitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universitas $universitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Universitas $uni)
    {
        if ($request->filled('kode_prodi')) {
            $request->validate([
                'kode_code' => ['string', 'confirmed'],
            ]);
        }
        $lastRecord = Universitas::latest('id')->first();
        $lastId = $lastRecord ? $lastRecord->id : 0;
        $kode_prodi = 'PRDC-' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

        $uni->kode_prodi = $kode_prodi;

        $uni->nama = $request->nama;
        $uni->kota = $request->kota;
        $uni->provinsi = $request->provinsi;
        $uni->prodi_id = $request->prodi_id;
        $uni->minimal_nilai_utbk = $request->minimal_nilai_utbk;
        $uni->minimal_nilai_snbp = $request->minimal_nilai_snbp;
        $uni->save();

        return redirect()->route('admin.universitas.index')->with('success','Data Universitas berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universitas $universitas)
    {
        $universitas->delete();
        return redirect()->route('admin.universitas.index')->with('success','Data Universitas berhasil di hapus');
    }
}
