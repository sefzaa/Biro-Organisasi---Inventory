<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangMasuk = BarangMasuk::all();
        return view ('biro.barangMasuk', compact(['barangMasuk']));
        //return view ('admin.barangMasuk', compact(['']));

    }



    public function create(Request $request)
    {
        

        // $totalCount = BarangMasuk('$harga')  * jumlah_barangMasuk ;

        // $total = BarangMasuk::total()->update([
        // 'total' => $totalCount
        // ]);
        BarangMasuk::create($request->all());
        $total = barangMasuk['harga'] * barangMasuk['jumlah_barangMasuk'];
       
        return redirect()->route('barangMasuk');

        //return view ('admin.barangMasuk', compact(['']));
    }


}
