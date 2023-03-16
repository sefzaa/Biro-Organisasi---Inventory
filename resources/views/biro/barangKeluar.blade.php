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
                                <h4 class="card-title">Barang Keluar</h4>
                                <button class="btn btn-danger btn-round ml-auto" data-toggle="modal" data-target="#modalFormKeluar">
                                    <i class="fa fa-plus"></i>
                                     Keluar 
                                </button>
                            </div>
                        </div>
                        
    <!-- Modal -->
    <div class="modal fade" id="modalFormKeluar" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="text text-primary"><strong>Tambah Data Barang Keluar</strong></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <form role="form" action="/barangKeluar/create" method="POST">         
                @csrf 
                <div class="modal-body">               
                    <div class="container">
                            <div class="form-group">
                                <select class="form-control" id="item" name="nama_barang">
                                    @foreach($barang as $a)
                                        <option value="{{ $a->nama_barang }}">{{ $a->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Jumlah</label>
                                <input name="jumlah_barangKeluar" type="number" class="form-control"  placeholder="Inputkan Jumlah"/>
                            </div>
                            <div class="form-group">
                                <label >Keterangan</label>
                                <input name="keterangan" class="form-control" type="text"  placeholder="Inputkan Keterangan"/>
                            </div>
                    </div>    
                </div>
            
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button  type="submit" class="btn btn-primary submitBtn">SUBMIT</button>
                </div>
            </form>

        </div>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($barangKeluar as $bk )
                                            
                                        <tr>
                                            <td>{{$bk -> nama_barang}}</td>
                                            <td>{{$bk -> jumlah_barangKeluar}}</td>
                                            <td>{{date('d-m-Y', strtotime($bk -> created_at))}}</td>
                                            <td>{{$bk -> keterangan}}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editBarangKeluar-{{$bk->id}}"><i class="fa fa-edit" ></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
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
