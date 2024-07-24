@extends('layouts.main')

@section('container')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><strong>{{ $title }}</strong></h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">{{ env('APP_NAME')}}</a>
            </li>
            <li class="active">
                <strong>{{ $title }}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content p-5">
                    <div class="d-flex m-b-md">
                        <button onclick="addForm()" class="text-white btn rounded-0 btn-primary">Tambah Pekerjaan</button>
                        {{-- <button onclick="importForm()" class="btn btn-success">Import Pekerjaan</button>
                        <a class="btn btn-warning" href="{{ route('export.pekerjaan') }}">Export Pekerjaan</a> --}}
                    </div>

                    @include('pekerjaan.form')
                    @include('pekerjaan.import')

                    <div class="table-responsive">
                        <table class="table table-hover dataTables-example" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    {{-- <th width="20%"  class="sorting">Id</th> --}}
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th width="25%"  class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    const table = $('.dataTables-example').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('data.pekerjaan') }}",
            columns: [
                {  
                    "data": null,
                    "class": "align-top",
                    "orderable": false,
                    "searchable": false,
                    "render": function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    } 
                },
                {data: 'nama', name: 'nama'},
                {data: 'alamat', name: 'alamat'},
                {data: 'no_telp', name: 'no_telp'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: []
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Pekerjaan');
        }

        function importForm() {
            $('#modal-form-import').modal('show');
            $('.modal-title').text('Import Pekerjaan');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('pekerjaan') }}" + '/' + id + '/edit',
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Pekerjaan');

                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#alamat').val(data.alamat);
                    $('#no_telp').val(data.no_telp);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }

        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajaxSetup({
                    headers: { "X-CSRF-Token" : $("meta[name=csrf-token]").attr("content") }
                });

                $.ajax({
                    url : "{{ url('pekerjaan') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        return swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        }).catch(function(timeout){})
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }

        $(function () {
            $('#modal-form form').validator().on('submit', function(e) {
                if(!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if(save_method  == 'add') url = "{{ url('pekerjaan') }}";
                    else url = "{{ url('pekerjaan') . '/' }}" + id;

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success: function(data){
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error: function(data){
                            swal({
                                title: 'Oops..',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });

</script>
@endsection