<?php

namespace App\Http\Controllers;

use App\Models\Medali;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $medalis = Medali::all();

        $emas = $medalis->where('medali', 1)->count();
        $perak = $medalis->where('medali', 2)->count();
        $perunggu = $medalis->where('medali', 3)->count();

        // perolehan medali berdasar golongan
        $usia_dini = $medalis->where('golongan', 'USIA DINI')->count();
        $pra_remaja = $medalis->where('golongan', 'PRA REMAJA')->count();
        $remaja = $medalis->where('golongan', 'REMAJA')->count();
        $dewasa = $medalis->where('golongan', 'DEWASA')->count();

        return view('laporan.perolehan-medali', compact(
            'medalis', 
            'emas', 
            'perak', 
            'perunggu',
            'usia_dini',
            'pra_remaja',
            'remaja',
            'dewasa',
        ));
    }
}
