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
                                            <th>Merk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($barangMasuk as $bm )
                                            
                                        <tr>
                                            <td>{{$bm -> nama_barang}}</td>
                                            <td>{{$bm -> merk}}</td>
                                            <td>{{$bm -> jumlah_barangMasuk}}</td>
                                            <td>{{$bm -> harga}}</td>
                                            <td>{{$bm->harga * $bm->jumlah_barangMasuk}}</td>
                                            <td>{{$bm -> updated_at}}</td>
                                        </tr>
                                        @endforeach

                                        @if (session('flash_message_success'))
                                        <div class="alert alert-success">
                                            {{session ('flash_message_success')}}
                                        </div>
                                            
                                        @endif

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
