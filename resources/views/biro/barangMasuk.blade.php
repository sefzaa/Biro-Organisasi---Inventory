@extends('layout.layoutbiro')
@section('content')

<!-- Modal -->
<div class="modal fade" id="modalFormMasuk" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="text text-primary"><strong>Tambah Data Barang Masuk</strong></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <form action="/barangMasuk/create"  method="POST">
                <div class="modal-body">
                
                    @csrf
                    <div class="container">
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Barang</label>
                                <select class="form-control" name="nama_barang" id="nama_barang">
                                    @foreach($barang as $b)
                                        <option value="{{ $b->nama_barang }}">{{ $b->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Harga</label>
                                <input type="number" name="harga" class="form-control"  placeholder="Inputkan Harga Barang"/>
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label >Jumlah</label>
                                <input type="number" name="jumlah_barangMasuk" class="form-control" placeholder="Inputkan Jumlah Barang"/>
                            </div>
                            <div class="form-group">
                                <label >Keterangan</label>
                                <input name="keterangan" class="form-control"  placeholder="Enter your message"/>
                            </div>
                            <div class="form-group">
                                <label for="file">Upload File</label>
                                <input type="file" name="file" class="form-control" id="file">
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
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($barangMasuk as $bm )
                                            
                                        <tr>
                                            <td>{{$bm -> nama_barang}}</td>
                                            <td>{{$bm -> jumlah_barangMasuk}}</td>
                                            <td>{{$bm -> harga}}</td>
                                            <td>{{$bm->harga * $bm->jumlah_barangMasuk}}</td>
                                            <td>{{date('d-m-Y', strtotime($bm -> updated_at))}}</td>
                                            <td>{{$bm -> keterangan}}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editBarangMasuk-{{$bm->id}}"><i class="fa fa-edit" ></i> Edit</a>
                                                <a href="/barangMasuk/detail/{{$bm->id}}" class="btn btn-success btn-xs" ><i class="fa fa-edit" ></i> Detail</a>

                                                <form action="{{ url('/barangMasuk/destroy/'.$bm->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>  
                                            </td>
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

    
    @foreach ($barangMasuk as $m)
        
    <div class="modal fade" id="editBarangMasuk-{{$m->id}}" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="text text-primary"><strong>Edit Data Barang Masuk</strong></h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                
                <!-- Modal Body -->
                <form action="{{url('/barangMasuk/edit/'.$m->id)}}"  method="POST">
                    <div class="modal-body">
                    
                        @csrf
                        <div class="container">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >Barang</label>
                                    <input type="text" name="nama_barang" class="form-control"   value="{{$m->nama_barang}}"/>
                                </div>
                                <div class="form-group">
                                    <label >Harga</label>
                                    <input type="number" name="harga" class="form-control"  value="{{$m->harga}}"/>
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label >Jumlah</label>
                                    <input type="number" name="jumlah_barangMasuk" class="form-control"  value="{{$m->jumlah_barangMasuk}}"/>
                                </div>
                                <div class="form-group">
                                    <label >Keterangan</label>
                                    <input name="keterangan" class="form-control"  value="{{$m->keterangan}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" name="file" class="form-control" id="file" value="{{$m->file}}">
                                </div>
                            </div>
                            </div>
                        </div>
                    
                    </div>
                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @endforeach


    
</div>
    
@endsection
