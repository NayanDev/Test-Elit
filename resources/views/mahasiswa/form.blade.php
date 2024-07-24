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
                                <input id="nama" name="namaMahasiswa" type="text" placeholder="Masukkan nama mahasiswa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>NIM</label> 
                                <input id="nimMahasiswa" name="nimMahasiswa" type="text" placeholder="Masukkan nim mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Angkatan</label> 
                                <input id="angkatanMahasiswa" name="angkatanMahasiswa" type="text" placeholder="Masukkan angkatan mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Judul Skripsi</label> 
                                <input id="judulskripsiMahasiswa" name="judulskripsiMahasiswa" type="text" placeholder="Masukkan judul skripsi mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pembimbing 1</label> 
                                <input id="pembimbing1" name="pembimbing1" type="text" placeholder="Masukkan pembimbing 1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pembimbing 2</label> 
                                <input id="pembimbing2" name="pembimbing2" type="text" placeholder="Masukkan pembimbing 2" class="form-control">
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