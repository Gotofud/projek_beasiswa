<?php

namespace App\Http\Controllers;

use App\Exports\UniversitasExport;
use App\Models\Kota;
use App\Models\Pendaftaran;
use App\Models\Prodi;
use App\Models\Provinsi;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

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
        $kota = Kota::all();

        return view('admin.universitas.index', compact('uni', 'prodi', 'provinsi', 'kota'));
    }

    public function export()
    {
        return Excel::download(new UniversitasExport, 'Data-Universitas.xlsx');
    }

    public function exportPDF()
    {
        $uni = Universitas::all();

        $pdf = Pdf::loadView('pdf.Universitas', compact('uni'));

        return $pdf->download('Data-Univ.pdf'); // Langsung download
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
        $this->validate($request, [
            'nama' => 'required',
            'kota_id' => 'required',
            'provinsi_id' => 'required',
            'kode_prodi' => 'required',
            'prodi_id' => 'required',
            'minimal_nilai_utbk' => 'required',
            'minimal_nilai_snbp' => 'required'
        ]);

        $uni = new Universitas();
        $uni->nama = $request->nama;
        $uni->kota_id = $request->kota_id;
        $uni->provinsi_id = $request->provinsi_id;
        $uni->kode_prodi = $request->kode_prodi;
        $uni->prodi_id = $request->prodi_id;
        $uni->minimal_nilai_utbk = $request->minimal_nilai_utbk;
        $uni->minimal_nilai_snbp = $request->minimal_nilai_snbp;
        $uni->save();

        return redirect()->route('admin.universitas.index')->with('success', 'Data Universitas berhasil di tambahkan');
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
        $this->validate($request, [
            'nama' => 'required',
            'kota_id' => 'required',
            'provinsi_id' => 'required',
            'kode_prodi' => 'required',
            'prodi_id' => 'required',
            'minimal_nilai_utbk' => 'required',
            'minimal_nilai_snbp' => 'required'
        ]);

        $uni->nama = $request->nama;
        $uni->kota = $request->kota;
        $uni->provinsi = $request->provinsi;
        $uni->prodi_id = $request->prodi_id;
        $uni->kode_prodi = $request->kode_prodi;
        $uni->minimal_nilai_utbk = $request->minimal_nilai_utbk;
        $uni->minimal_nilai_snbp = $request->minimal_nilai_snbp;
        $uni->save();

        return redirect()->route('admin.universitas.index')->with('success', 'Data Universitas berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $universitas = Universitas::findOrFail($id);
        $universitas->delete();
        return redirect()->route('admin.universitas.index')->with('success', 'Data Universitas berhasil di hapus');
    }
}
