@extends('layout.layoutbiro')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="page-header">
                <h4 class="page-title">Arus Barang</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Arus Barang</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <h1>Detail Barang Masuk</h1>
                                <p>Nama Barang {{ $barangmasuk->nama_barang }}</p>
                                <p>Harga: {{ $barangmasuk->harga }}</p>
                                <p>Jumlah: {{ $barangmasuk->jumlah_barangMasuk }}</p>
                                <p>Dibuat: {{ $barangmasuk->updated_at }}</p>
                                <p>Keterangan: {{ $barangmasuk->keterangan }}</p>
                                <p>File: {{ $barangmasuk->file }}</p>


                            </div>
                          

                           
                            




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


    
@endsection
