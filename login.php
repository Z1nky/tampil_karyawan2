<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="Template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script   script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head> 
    <body class="hold-transition login-page">
        <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="index.php" class="h1"><b>Login</b></a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Login to start your session</p>

            <form action="Koneksi/autentikasi.php" method="post">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <!-- <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div> -->
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>

                <div class="col-4 mt-2">
                    <a href="register.php"><ion-icon name="person-outline"></ion-icon>Register ?</a>
                </div>
                <!-- /.col -->
                </div>
            </form>

            <!-- <div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div> -->
            <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div> -->
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.login-box -->

    <!-- jQuery -->
    <script src="Template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Template/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="Template/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
    if(isset($_GET['error'])){
    $x = ($_GET['error']);
        if($x==1){
        echo "<script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            icon: 'error',
            title: 'Username atau Password Salah.'
        })</script>";
        }
        else if($x==2){
        echo "<script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            icon: 'warning',
            title: 'Username atau Password Belum Diisi.'
        })</script>";
        }
        else {
        echo '';
        }
    }
?>
</html>
