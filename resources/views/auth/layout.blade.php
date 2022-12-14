<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISF | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h2 class="h2">Islamic Social Finance</h2>
            </div>
            <div class="card-body">
                @yield('card-body')
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Country dependent ajax
            $("#alamat_prov").on("change", function() {
                $.ajax({
                    url: "{{ route('get_kabkot') }}?provinceCode=" + $(this).val(),
                    type: "GET",
                    success: function(data) {
                        $("#alamat_kabkot").html(data);
                    }
                });
            });

            $("#alamat_kabkot").on("change", function() {
                $.ajax({
                    url: `{{ route('get_kec') }}?cityCode=` + $(this).val(),
                    type: "GET",
                    success: function(data) {
                        $("#alamat_kec").html(data);
                    }
                });
            });

            $("#alamat_kec").on("change", function() {
                $.ajax({
                    url: `{{ route('get_desa') }}?districtCode=` + $(this).val(),
                    type: "GET",
                    success: function(data) {
                        $("#alamat_desa").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>
