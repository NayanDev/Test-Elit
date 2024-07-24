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
                                <label for="mahasiswa_id">Mahasiswa</label>
                                <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" style="width: 100%">
                                    <option>-- Select Mahasiswa --</option>
                                    @foreach ($mahasiswa as $item)
                                    <option value="{{ $item->id }}">{{ $item->namaMahasiswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_id">Pekerjaan</label>
                                <select name="pekerjaan_id" id="pekerjaan_id" class="form-control" style="width: 100%">
                                    <option>-- Select Pekerjaan --</option>
                                    @foreach ($pekerjaan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="custom-file">
                                    <input id="foto" name="foto" type="file" class="custom-file-input form-control m-b">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ijazah</label>
                                <div class="custom-file">
                                    <input id="ijazah" name="ijazah" type="file" class="custom-file-input form-control m-b">
                                </div>
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