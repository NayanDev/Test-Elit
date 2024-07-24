<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="modal-title m-t-none m-b"></h3>

                        <form id="form-item" method="POST" data-toggle="validator" enctype="multipart/form-data">
                            {{ csrf_field() }} {{ method_field('POST') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input id="id" name="id" type="hidden" class="form-control">
                            <div class="form-group">
                                <label>Nama</label> 
                                <input id="nama" name="nama" type="text" placeholder="Masukkan nama pekerjaan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label> 
                                <input id="alamat" name="alamat" type="text" placeholder="Masukkan alamat pekerjaan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>No Telp</label> 
                                <input id="no_telp" name="no_telp" type="text" placeholder="Masukkan telp pekerjaan" class="form-control">
                            </div>
                            <div>
                                <div class="button-group pull-right">
                                    <button id="btn-submit" class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Simpan</strong></button>
                                    <button class="btn btn-sm btn-danger m-t-n-xs" type="button" data-dismiss="modal"><strong>Cancel</strong></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>