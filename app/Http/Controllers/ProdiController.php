<?php

namespace App\Http\Controllers;

use App\Exports\ProdiExport;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $prodi = Prodi::all();
        return view('admin.prodi.index', compact('prodi'));
    }

    public function export()
    {
        return Excel::download(new ProdiExport, 'Data-Prodi.xlsx');
    }

    public function exportPDF()
    {
        $prodi = Prodi::all();

        $pdf = Pdf::loadView('pdf.prodi', compact('prodi'));

        return $pdf->download('Data-Prodi.pdf'); // Langsung download
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
            'nama' => 'required|unique:prodis'
        ]);
        $prodi = new Prodi();
        $prodi->nama = $request->nama;
        $prodi->save();

        return redirect()->route('admin.prodi.index')->with('success', 'Data Program Studi berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $this->validate($request, [
            'nama' => 'required|unique:prodis'
        ]);
        $prodi->nama = $request->nama;
        $prodi->save();

        return redirect()->route('admin.prodi.index')->with('success', 'Data Program studi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('admin.prodi.index')->with('success', 'Data Program Studi berhasil di hapus');
    }
}
