<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Universitas;


class DashboardController extends Controller
{
     public function index()
    {
        $data = [
            'totalUser' => User::where('role','user')->get()->count(),
            'totalUniversitas' => Universitas::count(),
        ];

        return view('admin.index',compact('data'));
    }
}
