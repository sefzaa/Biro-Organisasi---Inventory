<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangKeluar = BarangKeluar::all();
        return view ('biro.barangKeluar', compact(['barangKeluar']));
        return view ('admin.barangKeluar', compact(['']));

    }

    public function create(Request $request)
    { 
        BarangKeluar::create($request->all());
        return redirect()->route('barangKeluar');
    }
}
