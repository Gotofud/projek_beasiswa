<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ManagePeserta extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::with('user')->get();
        return view('admin.peserta.index', compact('peserta'));
    }

    public function export()
    {
        return Excel::download(new ReviewerExport, 'Data-Reviewer.xlsx');
    }

    public function exportPDF()
    {
        $peserta = Peserta::with('user')->get();

        $pdf = Pdf::loadView('pdf.peserta', compact('peserta'));

        return $pdf->download('Data-peserta.pdf'); // Langsung download
    }

    public function biodataPDF($id)
    {
        $peserta = Peserta::with('user')->findOrFail($id);

        $pdf = Pdf::loadView('pdf.biodata', compact('peserta'));

        return $pdf->download('Biodata-Peserta-' . $peserta->nama_lengkap . '.pdf');
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
        $user = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($id)],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $request->validate([
                'password' => ['string', 'min:8', 'confirmed'],
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.peserta.index')->with('success', 'Data User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.peserta.index')->with('success', 'Data User berhasil di hapus');
    }
}
