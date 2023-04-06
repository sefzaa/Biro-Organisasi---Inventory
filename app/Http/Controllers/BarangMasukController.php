<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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
        $barang = Barang::all();
        return view ('admin.barangMasuk', compact(['barangMasuk', 'barang']));
        // return view ('admin.barangMasuk', compact(['barangMasuk']));
    }

    public function create(Request $request)
    { 
        $request->validate([
            'nama_barang' => 'required|string',
            'harga' => 'required|integer',
            'jumlah_barangMasuk' => 'required|integer',
            'keterangan' => 'required|string',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $total_price = $request->harga * $request->jumlah_barangMasuk;

        $item = new BarangMasuk;
        $item->nama_barang = $request->nama_barang;
        $item->harga = $request->harga;
        $item->jumlah_barangMasuk = $request->jumlah_barangMasuk;
        $item->total = $total_price;
        $item->keterangan = $request->keterangan;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/gambar');
            $item->gambar = $path;
        }
        $item->save();


        $barang = Barang::where('nama_barang', $request->nama_barang)->first();

        // Jika barang belum ada di tabel barang, maka tambahkan barang baru
        if (!$barang) {
            $barang = new Barang();
            $barang->nama_barang = $request->nama_barang;
            $barang->stok = $request->jumlah_barangMasuk;
        }

        // Update stok barang
        $barang->stok += $request->jumlah_barangMasuk;
        $barang->save();

        return redirect()->back()->with('success', 'Item saved successfully.');
     
    }

    public function destroy($id)
    {
        // ambil data barang masuk dari database
        $barangmasuk = BarangMasuk::findOrFail($id);

        // kurangi stok pada tabel barang
        $barang = Barang::where('nama_barang', $barangmasuk->nama_barang)->first();
        if ($barang) {
            $barang->stok -= $barangmasuk->jumlah_barangMasuk;
            $barang->save();
        }

        // hapus data barang masuk
        $barangmasuk->delete();

        return redirect('/barangMasuk')->with('success', 'Data barang masuk berhasil dihapus!');
    }

    public function show($id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);

        return view('biro.detail', compact('barangmasuk'));
    }


    public function edit(Request $request, $id)
    {

            // validasi input
        $request->validate([
            'nama_barang' => 'required|string',
                'harga' => 'required|integer',
                'jumlah_barangMasuk' => 'required|integer',
                'keterangan' => 'required|string',
                'file' => 'required|string'
        ]);

        // ambil data barang masuk dari database
        $barang_masuk = BarangMasuk::findOrFail($id);

        // perbarui data barang masuk
        $total_price = $request->harga * $request->jumlah_barangMasuk;
        $barang_masuk->nama_barang = $request->nama_barang;
        $barang_masuk->harga = $request->harga;
        $barang_masuk->jumlah_barangMasuk = $request->jumlah_barangMasuk;
        $barang_masuk->total = $total_price;
        $barang_masuk->keterangan = $request->keterangan;
        $barang_masuk->file = $request->file;
        $barang_masuk->save();

        // perbarui stok pada tabel barang
        $barang = Barang::where('nama_barang', $barang_masuk->nama_barang)->first();
        if ($barang) {
            $barang->stok += $request->input('jumlah_barangMasuk');
        } else {
            $barang = new Barang();
            $barang->nama_barang = $request->input('nama_barang');
            $barang->stok = $request->input('jumlah_barangMasuk');
        }
        $barang->save();

        return redirect('/barangMasuk')->with('success', 'Data barang masuk berhasil diupdate!');
    
        //====Cara Lain===
        if ($request->isMethod('post')){
            $m = $request->all();

            BarangMasuk::where(['id'=>$id])->update([
                'nama_barang'=>$m['nama_barang'],
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




