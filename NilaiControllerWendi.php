<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // 🔥 INI YANG KURANG

class NilaiControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('nilai_wendi')->get();
        return view('nilai.index', compact('data'));
    }
}