<?php

namespace App\Http\Controllers;

use App\Models\atlet;
use Illuminate\Http\Request;

class DataAtletController extends Controller
{
    public function dataAtlet(Request $request)
    {
        $atlet = atlet::where('id', $request->idAtlet)->first();
        
        return response()->json([
            'dataAtlet' => $atlet,
        ]);
    }
}
