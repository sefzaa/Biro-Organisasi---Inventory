
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
                                <label >Barang</label>
                                <input type="text" name="nama_barang" class="form-control"  placeholder="Inputkan Barang"/>
                            </div>
                            <div class="form-group">
                                <label >Merk</label>
                                <input type="text" name="merk" class="form-control"  placeholder="Inputkan Merk Barang"/>
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
                                <textarea name="keterangan" class="form-control"  placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Upload File</label>
                                <textarea name="file" class="form-control" placeholder="Enter your message"></textarea>
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