<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Informasi Manajemen - Elit</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet">

    {{-- Datepicker --}}
    <link href="{{ asset('assets/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

    {{-- SweetAlert2 --}}
    <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    {{-- Select2 --}}
    <link href="{{ asset('assets/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
</head>

<body>

    <div id="wrapper">

        @include('layouts.sidebar')

        <div id="page-wrapper" class="gray-bg">
            @include('layouts.header')

            @yield('container')

            @include('layouts.footer')
        </div>
    </div>



<!-- Mainly scripts -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

{{-- Datepicker --}}
<script src="{{ asset('assets/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

{{-- Select2 --}}
<script src="{{ asset('assets/js/plugins/select2/select2.full.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('assets/js/inspinia.js') }}"></script>
<script src="{{ asset('assets/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dataTables/datatables.min.js') }}"></script>

{{-- SweetAlert2 --}}
<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
{{-- @include('sweetalert::alert') --}}

{{-- Validator --}}
<script src="{{ asset('assets/validator/validator.min.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@yield('script')

</body>

</html>