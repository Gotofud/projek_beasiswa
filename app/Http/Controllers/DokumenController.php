<?php

namespace App\Http\Controllers;

use App\Exports\PendaftaranExport;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen = Pendaftaran::with('peserta')->where('status', 'diproses')->get();
        return view('admin.dokumen.index', compact('dokumen'));
    }

    public function export()
    {
        return Excel::download(new PendaftaranExport, 'Data-Pendaftaran.xlsx');
    }

    public function exportPDF()
    {
        $dokumen = Pendaftaran::all();

        $pdf = Pdf::loadView('pdf.dokumen', compact('dokumen'));

        return $pdf->download('Data-Validasi-dokumen.pdf'); // Langsung download
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokumen = Pendaftaran::findOrFail($id);
        return view('admin.dokumen.dokumen', compact('dokumen'));
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
        $dokumen = Pendaftaran::findOrFail($id);
        $dokumen->status = $request->status;
        $dokumen->save();
        return redirect()->route('admin.dokumen.index')->with('success', 'Status Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokumen = Pendaftaran::findOrFail($id);
        return redirect()->route('admin.dokumen.index')->with('success', 'Data Berhasil di hapus');
    }
}
