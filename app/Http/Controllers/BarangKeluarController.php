<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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
        $barang = Barang::all();
        return view ('biro.barangKeluar', compact(['barangKeluar', 'barang']));
        // return view ('admin.barangKeluar', compact(['']));

    }

    public function create(Request $request)
    { 
        
        $request->validate([
            'nama_barang' => 'required|string',
            'jumlah_barangKeluar' => 'required|integer',
            'keterangan' => 'required|string',
        ]);


        $barang = Barang::where('nama_barang', $request->nama_barang)->firstOrFail();

        //Kurangi stok pada tabel barang sesuai jumlah barang keluar
        $barang->stok -= $request->jumlah_barangKeluar;
        $barang->save();
    
        // Simpan data barang keluar pada tabel barang_keluar
        $barangKeluar = new BarangKeluar();
        $barangKeluar->nama_barang = $request->nama_barang;
        $barangKeluar->jumlah_barangKeluar = $request->jumlah_barangKeluar;
        $barangKeluar->keterangan = $request->keterangan;
        // $barangKeluar->barang()->associate($barang);
        $barangKeluar->save();

        return redirect()->back()->with('success', 'Item saved successfully.');
     
    }

    public function edit(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $k = $request->all();

            BarangKeluar::where(['id'=>$id])->update([
                'nama_barang'=>$k['nama_barang'],
                'jumlah_barangKeluar'=>$k['jumlah_barangKeluar'],
                'keterangan'=>$k['keterangan'],
            ]);
            return redirect()->back()->with('flash_message_success', 'Data Berhasil Diubah');
       }
    }
}

    