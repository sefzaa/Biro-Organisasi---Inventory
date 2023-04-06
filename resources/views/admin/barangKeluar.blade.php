@extends('layout.layoutadmin')
@section('content')


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Barang Masuk</h4>
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
                                <h4 class="card-title">Data Barang Masuk</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalFormMasuk">
                                    <i class="fa fa-plus"></i>
                                     Masuk 
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body">
                          

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($barangKeluar as $bk )
                                            
                                        <tr>
                                            <td>{{$bk -> nama_barang}}</td>
                                            <td>{{$bk -> jumlah_barangKeluar}}</td>
                                            <td>{{date('d-m-Y', strtotime($bk -> created_at))}}</td>
                                            <td>{{$bk -> keterangan}}</td>
                                            
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>
    
@endsection
