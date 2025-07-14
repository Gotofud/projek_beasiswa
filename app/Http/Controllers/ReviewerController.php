<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\ReviewerExport;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $reviewer = User::where('role', 'reviewer')->get();
        return view('admin.reviewer.index', compact('reviewer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function export()
    {
        return Excel::download(new ReviewerExport, 'Data-Reviewer.xlsx');
    }

    public function exportPDF()
    {
        $reviewer = User::where('role', 'reviewer')->get();

        $pdf = Pdf::loadView('pdf.reviewer', compact('reviewer'));

        return $pdf->download('Data-Reviewer.pdf'); // Langsung download
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'reviewer';
        $user->save();
        return redirect()->route('admin.reviewer.index')->with('success', 'Data Reviewer berhasil di tambahkan');
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

        return redirect()->route('admin.reviewer.index')->with('success', 'Data Reviewer berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.reviewer.index')->with('success', 'Data Reviewer berhasil di hapus');
    }
}
