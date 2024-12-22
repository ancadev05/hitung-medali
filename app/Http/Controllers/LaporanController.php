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

        // rincian jenis medali
        $usia_dini_1 = $medalis->where('golongan', 'USIA DINI')->where('medali', 1)->count();
        $usia_dini_2 = $medalis->where('golongan', 'USIA DINI')->where('medali', 2)->count();
        $usia_dini_3 = $medalis->where('golongan', 'USIA DINI')->where('medali', 3)->count();
        $pra_remaja_1 = $medalis->where('golongan', 'PRA REMAJA')->where('medali', 1)->count();
        $pra_remaja_2 = $medalis->where('golongan', 'PRA REMAJA')->where('medali', 2)->count();
        $pra_remaja_3 = $medalis->where('golongan', 'PRA REMAJA')->where('medali', 3)->count();
        $remaja_1 = $medalis->where('golongan', 'REMAJA')->where('medali', 1)->count();
        $remaja_2 = $medalis->where('golongan', 'REMAJA')->where('medali', 2)->count();
        $remaja_3 = $medalis->where('golongan', 'REMAJA')->where('medali', 3)->count();
        $dewasa_1 = $medalis->where('golongan', 'DEWASA')->where('medali', 1)->count();
        $dewasa_2 = $medalis->where('golongan', 'DEWASA')->where('medali', 2)->count();
        $dewasa_3 = $medalis->where('golongan', 'DEWASA')->where('medali', 3)->count();

        // perolehan L
        $usia_dini_l_1 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'L')->where('medali', 1)->count();
        $usia_dini_l_2 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'L')->where('medali', 2)->count();
        $usia_dini_l_3 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'L')->where('medali', 3)->count();
        $pra_remaja_l_1 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'L')->where('medali', 1)->count();
        $pra_remaja_l_2 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'L')->where('medali', 2)->count();
        $pra_remaja_l_3 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'L')->where('medali', 3)->count();
        $remaja_l_1 = $medalis->where('golongan', 'REMAJA')->where('jk', 'L')->where('medali', 1)->count();
        $remaja_l_2 = $medalis->where('golongan', 'REMAJA')->where('jk', 'L')->where('medali', 2)->count();
        $remaja_l_3 = $medalis->where('golongan', 'REMAJA')->where('jk', 'L')->where('medali', 3)->count();
        $dewasa_l_1 = $medalis->where('golongan', 'DEWASA')->where('jk', 'L')->where('medali', 1)->count();
        $dewasa_l_2 = $medalis->where('golongan', 'DEWASA')->where('jk', 'L')->where('medali', 2)->count();
        $dewasa_l_3 = $medalis->where('golongan', 'DEWASA')->where('jk', 'L')->where('medali', 3)->count();

        // perolehan P
        $usia_dini_p_1 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'P')->where('medali', 1)->count();
        $usia_dini_p_2 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'P')->where('medali', 2)->count();
        $usia_dini_p_3 = $medalis->where('golongan', 'USIA DINI')->where('jk', 'P')->where('medali', 3)->count();
        $pra_remaja_p_1 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'P')->where('medali', 1)->count();
        $pra_remaja_p_2 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'P')->where('medali', 2)->count();
        $pra_remaja_p_3 = $medalis->where('golongan', 'PRA REMAJA')->where('jk', 'P')->where('medali', 3)->count();
        $remaja_p_1 = $medalis->where('golongan', 'REMAJA')->where('jk', 'P')->where('medali', 1)->count();
        $remaja_p_2 = $medalis->where('golongan', 'REMAJA')->where('jk', 'P')->where('medali', 2)->count();
        $remaja_p_3 = $medalis->where('golongan', 'REMAJA')->where('jk', 'P')->where('medali', 3)->count();
        $dewasa_p_1 = $medalis->where('golongan', 'DEWASA')->where('jk', 'P')->where('medali', 1)->count();
        $dewasa_p_2 = $medalis->where('golongan', 'DEWASA')->where('jk', 'P')->where('medali', 2)->count();
        $dewasa_p_3 = $medalis->where('golongan', 'DEWASA')->where('jk', 'P')->where('medali', 3)->count();

        // 

        return view('laporan.perolehan-medali', compact(
            'medalis',
            'emas',
            'perak',
            'perunggu',
            'usia_dini',
            'pra_remaja',
            'remaja',
            'dewasa',

            'usia_dini_1',
            'usia_dini_2',
            'usia_dini_3',
            'pra_remaja_1',
            'pra_remaja_2',
            'pra_remaja_3',
            'remaja_1',
            'remaja_2',
            'remaja_3',
            'dewasa_1',
            'dewasa_2',
            'dewasa_3',

            'usia_dini_l_1',
            'usia_dini_l_2',
            'usia_dini_l_3',
            'pra_remaja_l_1',
            'pra_remaja_l_2',
            'pra_remaja_l_3',
            'remaja_l_1',
            'remaja_l_2',
            'remaja_l_3',
            'dewasa_l_1',
            'dewasa_l_2',
            'dewasa_l_3',

            'usia_dini_p_1',
            'usia_dini_p_2',
            'usia_dini_p_3',
            'pra_remaja_p_1',
            'pra_remaja_p_2',
            'pra_remaja_p_3',
            'remaja_p_1',
            'remaja_p_2',
            'remaja_p_3',
            'dewasa_p_1',
            'dewasa_p_2',
            'dewasa_p_3',
        ));
    }
}
