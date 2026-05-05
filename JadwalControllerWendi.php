<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class JadwalControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('jadwal_wendi')->get();
        return view('jadwal.index', compact('data'));
    }
}