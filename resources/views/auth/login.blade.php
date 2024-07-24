<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi ELIT</title>

    <!-- Inspina Theme -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Login Custom -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/plugins/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
    <style>
        .color {
            
        }
    </style>

</head>

<body>

    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">

                        <div class="content">
                            <div class="header">
                                <center><img src="{{ asset('img/logo-elit.png') }}" height="75" alt="logo"></center>
                            </div>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="signin-email" placeholder="masukkan email anda.." autofocus required value="{{ old('email') }}">
                                </div>
                                <!-- Log on to codeastro.com for more projects! -->
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" id="signin-password"
                                        placeholder="masukkan password anda.." required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color: rgb(75, 161, 231); border-color: rgb(75, 161, 231)">LOGIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay" style="background: rgb(75, 161, 231)"></div>
                        <div class="content text">
                            <h1 class="heading text-center">Sistem Informasi Manajemen</h1>
                            <p class="text-center">PT Estu Lentera Indo Teknologi</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

<!-- Mainly scripts -->
<script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('assets/js/inspinia.js') }}"></script>
<script src="{{ asset('assets/js/plugins/pace/pace.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins/dataTables/datatables.min.js') }}"></script>

{{-- Sweetalert2 --}}
{{-- @include('sweetalert::alert') --}}

<script type="text/javascript">
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>

</body>

</html>