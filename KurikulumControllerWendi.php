<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('kurikulum_wendi')->get();
        return view('kurikulum.index', compact('data'));
    }
}