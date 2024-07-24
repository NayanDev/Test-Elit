<div id="modal-form-import" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="modal-title m-t-none m-b"></h3>

                        <a class="text-primary m-b-md m-t-md" href="{{ asset('import/MahasiswaImport.xlsx') }}">Download Template Excel</a>
                        <form action="{{ route('import.mahasiswa') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="custom-file">
                                <input id="import" name="file" type="file" class="custom-file-input form-control m-b">
                            </div>
                            <button class="btn btn-success">Import</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>