<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Batch;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $request->validate([
            'nama_barang' => 'required|string',
            'merk' => 'required|string',
            'harga' => 'required|integer',
            'jumlah_barangMasuk' => 'required|integer',
            'keterangan' => 'required|string',
            'file' => 'required|string'
            
        ]);
    
        $total_price = $request->harga * $request->jumlah_barangMasuk;
    
        $item = new BarangMasuk;
        $item->nama_barang = $request->nama_barang;
        $item->merk = $request->merk;
        $item->harga = $request->harga;
        $item->jumlah_barangMasuk = $request->jumlah_barangMasuk;
        $item->total = $total_price;
        $item->keterangan = $request->keterangan;
        $item->file = $request->file;
        $item->save();
    
        return redirect()->back()->with('success', 'Item saved successfully.');

        return redirect()->route('barangMasuk');
    }

    public function edit(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $m = $request->all();

            BarangMasuk::where(['id'=>$id])->update([
                'nama_barang'=>$m['nama_barang'],
                'merk'=>$m['merk'],
                'harga'=>$m['harga'],
                'jumlah_barangMasuk'=>$m['jumlah_barangMasuk'],
                'harga'=>$m['harga'],
                'total'=>$m['harga'] * $m['jumlah_barangMasuk'] ,
                'keterangan'=>$m['keterangan'],
                'file'=>$m['file']
            ]);
            return redirect()->back()->with('flash_message_success', 'Data Berhasil Diubah');
       }
    }
}
