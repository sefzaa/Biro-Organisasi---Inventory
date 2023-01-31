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

                            <!-- Button to trigger modal -->
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Barang Masuk</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalFormMasuk">
                                    <i class="fa fa-plus"></i>
                                     Masuk 
                                </button>
                                <button class="btn btn-danger btn-round mr-2" data-toggle="modal" data-target="#modalFormKeluar">
                                    <i class="fa fa-plus"></i>
                                     Keluar 
                                </button>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modalFormMasuk" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h3 class="text text-primary"><strong>Tambah Data Barang</strong></h3>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="container">
                                                    <div class="row">
                                                      <div class="col">
                                                        <div class="form-group">
                                                            <label for="inputEmail">Barang</label>
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Jumlah</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Harga</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                      </div>
                                                      <div class="col">
                                                        <div class="form-group">
                                                            <label for="inputMessage">Keterangan</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Upload File</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- Modal -->
                             <div class="modal fade" id="modalFormKeluar" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h3 class="text text-primary"><strong>Tambah Data Barang</strong></h3>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="container">
                                                        <div class="form-group">
                                                            <label for="inputEmail">Barang</label>
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Jumlah</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Keterangan</label>
                                                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                        </div>
                                                </div>
                                                    
                                            </form>
                                        </div>
                                        
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="card-body">
                          

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Barang</th>
                                            <th>Harga Satuan</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Kertas</td>
                                            <td>4000</td>
                                            <td>4</td>
                                        </tr>
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
