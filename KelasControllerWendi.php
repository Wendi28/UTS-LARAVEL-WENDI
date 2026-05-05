<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('kelas_wendi')->get();
        return view('kelas.index', compact('data'));
    }
}
