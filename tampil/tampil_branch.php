<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil Branch</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../Template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../Template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../Template/plugins/summernote/summernote-bs4.min.css">


    <script src="../Template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Template/dist/js/adminlte.min.js"></script>
    <script src="../Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../Template/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../Template/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../Template/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../Template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../Template/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../Template/plugins/moment/moment.min.js"></script>
    <script src="../Template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../Template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../Template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../Template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</head>
    <body>    
    <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../Template/dist/img/union1.png" alt="union" height="400" width="500">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
        </li>
    </ul>



        
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
        <span class="brand-text font-weight-light"><center><b>U N I O N</b> </center></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../Template/dist/img/Boa.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Boa Hancock</a>
        </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
            </div>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                Menu
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="tampil_karyawan.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Karyawan</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tampil_departemen.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Department</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tampil_bank.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tampil_branch.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Branch</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tampil_semua.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tampil Semua</p>
                </a>
                </li>
            </ul>
            </li>
            
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0"><b>Data Branch</b></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Department</a></li>
                <li class="breadcrumb-item active">Data Department</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <?php

        include_once("../Koneksi/koneksi2.php");
        
    // Fetch all users data from database
    $result = mysqli_query($db, "select * from branch");
        
        
            $i = 1;
        ?>

        <div class="card-body mr-5">
            <a href="../Add/tambah_branch.php" class="btn btn-outline-primary btn-sm mb-3">Tambah</a>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Branch</th>
                            <th scope="col">Nama Branch</th>
                            <th scope="col">Kode Branch</th>
                            <th scope="col">Alamat Branch</th>
                            <th scope="col"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        while($user_data = mysqli_fetch_array($result)) {
                            // while($user_data2 = mysqli_fetch_array($result2)) {
                            echo "<tr>";
                            echo "<td>".$i++."</td>";
                            echo "<td>".$user_data[('Id_Branch')]."</td>";
                            echo "<td>".$user_data[('Nama_Branch')]."</td>";
                            echo "<td>".$user_data[('Kode_Branch')]."</td>";
                            echo "<td>".$user_data[('Alamat_Branch')]."</td>";
                            echo "<td><center><a class='btn btn-outline-warning' href='../edit/edit_branch.php?Id_Branch=$user_data[Id_Branch]'>Edit</a>
                            <a class='btn btn-outline-danger ml-3' href='../Delete/deletebranch.php?Id_Branch=$user_data[Id_Branch]'>Delete</a></center></td></tr>";
                            }
                    
                        ?>      
                </tbody>
                </table>
            </div>
        </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>