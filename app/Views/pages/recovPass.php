<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Kata Sandi/Password Baru</title>

    <!-- Favicons -->
    <link href="assets/img/Logo-Aminah-03.png" rel="icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">

    <style>
        .login-page {
            background-color: lightgreen;
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/Logo-Aminah-02.png');
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .login-card-body,
        .card {
            border-radius: 20px;
        }
    </style>

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo mt-0 mb-0">
                    <a href="/">
                        <img src="assets/img/Logo-Aminah-03.png" width="50" alt="">
                        <h4 class="login-box-msg">Ubah Kata Sandi/Password</h4>
                    </a>
                </div>
                <p class="login-box-msg">Silahkan masukkan kata sandi/password baru anda.</p>

                <form action="/recovPass" method="post">
                    <label for="password">Password baru</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="masukkan kata sandi baru kamu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <label for="password">Konformasi Password</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="masukkan kembali kata sandi baru kamu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Ubah Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>