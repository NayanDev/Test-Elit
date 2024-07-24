@extends('layouts.main')

@section('container')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><strong>{{ $title }}</strong></h2>
        <ol class="breadcrumb">
            <li>
                {{ env('APP_NAME')}}
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
                <div class="text-center">
                    <div class="wrapper wrapper-content">

                        <div class="row">
                            <div class="col-lg-3">
                                <a href="/user">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <span class="label label-success pull-right">Pengguna</span>
                                            <h5>Pengguna</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <h1 class="no-margins">{{ $pengguna }}</h1>
                                            <div class="stat-percent font-bold text-success"> <i
                                                    class="fa fa-user"></i></div>
                                            <small>Total Pengguna</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="/mahasiswa">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <span class="label label-info pull-right">Mahasiswa</span>
                                            <h5>Mahasiswa</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <h1 class="no-margins">{{ $mahasiswa }}</h1>
                                            <div class="stat-percent font-bold text-info"> <i
                                                    class="fa fa-users"></i></div>
                                            <small>Total Mahasiswa</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="/pekerja">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <span class="label label-primary pull-right">Pekerja</span>
                                            <h5>Pekerja</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <h1 class="no-margins">{{ $pekerja }}</h1>
                                            <div class="stat-percent font-bold text-navy"> <i
                                                    class="fa fa-cubes"></i></div>
                                            <small>Total Pekerja</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="/alumni">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <span class="label label-danger pull-right">Alumni</span>
                                            <h5>Alumni</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <h1 class="no-margins">{{ $alumni }}</h1>
                                            <div class="stat-percent font-bold text-danger"> <i
                                                    class="fa fa-users"></i></div>
                                            <small>Total Alumni</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy' },
                { extend: 'csv' },
                { extend: 'excel', title: 'ExampleFile' },
                { extend: 'pdf', title: 'ExampleFile' },

                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>
@endpush

@endsection