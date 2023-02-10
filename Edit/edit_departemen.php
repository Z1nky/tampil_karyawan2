<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Department</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
        include_once("../Koneksi/koneksi2.php");

        $iddepartemen1 = $_GET['Id_Departemen'];
        $tampiledit = mysqli_query($db,"select * from departemen where Id_Departemen = $iddepartemen1");
        while($user_data = mysqli_fetch_array($tampiledit))
        {
            $iddepartemen2 = $user_data['Id_Departemen'];
            $codedepartemen = $user_data['Kode_Departemen'];
            $namadepartemen = $user_data['Nama_Departemen'];
            $alamatdepartemen = $user_data['Alamat_Departemen'];
        }

    ?>
    <div class="tambahbank">
        <h3>UPDATE Departemen</h3>
    </div>
    <form method="POST" action="../action/actiondepartemen.php">
        <div class="container">
            <div class="mb-3 mt-3">
                    <label class="form-label"><b>Id Department:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $iddepartemen2;?> name="IdDepartemen">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Kode Department:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $codedepartemen;?> name="KodeDepartemen">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Nama Department:</b></label>
                    <hr>
                    <input type="text" class="form-control" value=<?php echo $namadepartemen;?> name="NamaDepartemen">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Alamat Department:</b></label>
                    <hr>
                    <input type="text" class="form-control" value=<?php echo $alamatdepartemen;?> name="AlamatDepartemen">
                </div>
            <button type="submit" class="btn btn-primary" name="UpdateDepartemen">Update</button>
            <a href="../tampil/tampil_departemen.php" class="btn btn-danger">Kembali</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>     