<?php

namespace App\Http\Controllers;

use App\Models\Seleksi;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statusSeleksi = Seleksi::with('pendaftaran')->get();
        return view('user.status', compact('statusSeleksi'));
    }
}
