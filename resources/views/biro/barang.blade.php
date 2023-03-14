@extends('layout.layoutbiro')
@section('content')



<div class="modal fade" id="modalBarang" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="text text-primary"><strong>Tambah Data Barang </strong></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <form action="/barang/create"  method="POST">
                <div class="modal-body">
                
                    @csrf
                    <div class="container">
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Barang</label>
                                <input name="nama_barang" class="form-control"  placeholder="Inputkan Nama Barang"/>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                
                </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submitBtn" href="/barangMasuk">SUBMIT</button>
            </div>
        </form>
        </div>
    </div>
</div>


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
                                <h4 class="card-title">Data Barang</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalBarang">
                                    <i class="fa fa-plus"></i>
                                     Masuk 
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <h1> Barang </h1>
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @php 
                                                $no= 1; 
                                            @endphp      
                                            @foreach ($barang as $b )                                                                                                                  
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$b -> nama_barang}}</td>
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
    
</div>


    
@endsection
