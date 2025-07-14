<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Seleksi;
use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class StatusController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $peserta = Peserta::where('user_id', $user->id)->first();
        $pendaftaran = $peserta ? Pendaftaran::with('ptn.prodi')->where('peserta_id', $peserta->id)->first() : null;
        $seleksi = $pendaftaran ? Seleksi::with('pendaftaran')->where('id_pendaftaran', $pendaftaran->id)->first() : null;

        return view('user.status', compact('peserta', 'pendaftaran', 'seleksi'));
    }




    public function exportPDF()
    {
        $pendaftaran = Pendaftaran::where('status', 'diterima')->first();
        $hasil = Seleksi::where('id_pendaftaran', $pendaftaran->id)->first();

        $pdf = Pdf::loadView('pdf.status', compact('hasil', 'pendaftaran'));

        return $pdf->download('Sertifikat.pdf'); // Langsung download
    }
}
