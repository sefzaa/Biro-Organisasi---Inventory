<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;

class LaporanController extends Controller

{
    public function index()
    {
        // Ambil data dari model Barang
        $barang = Barang::all();

        // Generate PDF dari view 'laporan.pdf'
        $pdf = PDF::loadView('laporan.pdf', ['barang' => $barang])
                  ->setPaper('a4', 'landscape')
                  ->setOptions(['margin-top' => 10, 'margin-right' => 10, 'margin-bottom' => 10, 'margin-left' => 10]);

        // Kembalikan file PDF ke user
        return $pdf->stream('laporan.pdf');
    }
}


