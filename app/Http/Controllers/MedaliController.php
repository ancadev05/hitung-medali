<?php

namespace App\Http\Controllers;

use App\Models\atlet;
use App\Models\Medali;
use Illuminate\Http\Request;

class MedaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medalis = Medali::all();

        $emas = $medalis->where('medali', 1)->count();
        $perak = $medalis->where('medali', 2)->count();
        $perunggu = $medalis->where('medali', 3)->count();

        // Mengambil data yang memiliki nilai kolom yang sama
        $duplicates = Medali::select('nama_atlet', 'jk', 'cabang', 'golongan', 'kategori', 'kelas_tanding')
            ->groupBy('nama_atlet', 'jk', 'cabang', 'golongan', 'kategori', 'kelas_tanding')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        return view('medali.medali-index', compact('medalis', 'emas', 'perak', 'perunggu', 'duplicates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $atlets = atlet::all();
        return view('medali.medali-create', compact('atlets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medali = [
            'nama_atlet' => $request->nama_atlet,
            'jk' => $request->jk,
            'cabang' => $request->cabang,
            'golongan' => $request->golongan,
            'kategori' => $request->kategori,
            'kelas_tanding' => $request->kelas_tanding,
            'medali' => $request->medali,
        ];

        Medali::create($medali);

        return redirect('/');
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
        $medali = Medali::find($id);

        return view('medali.medali-edit', compact('medali'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medali = [
            'medali' => $request->medali,
        ];

        Medali::where('id', $id)->update($medali);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medali = Medali::find($id);
        $medali->delete();

        return redirect('/');
    }
}
