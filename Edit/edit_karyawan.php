<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Karyawan</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
        include_once("../Koneksi/koneksi2.php");

        $idkaryawan1 = $_GET['Id_Karyawan'];
        $tampiledit = mysqli_query($db,"select * from karyawan where Id_Karyawan = $idkaryawan1");
        while($user_data = mysqli_fetch_array($tampiledit))
        {
            $idkaryawan2 = $user_data['Id_Karyawan'];
            $iddepartemen = $user_data['Id_Departemen'];
            $idbranch = $user_data['Id_Bank'];
            $idbank = $user_data['Id_Bank'];
            $Nama = $user_data['Nama'];
            $alamat = $user_data['Alamat'];
        }

    ?>
    <div class="tambahbank">
        <h3>UPDATE KARYAWAN</h3>
    </div>
    <form method="POST" action="../action/actionkaryawan.php">
        <div class="container">
            <div class="mb-3 mt-3">
                    <label for="id Karyawan" class="form-label"><b>Id Karyawan</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $idkaryawan2;?> name="IdKaryawan">
                </div>
                <div class="mb-3">
                    <label for="Id Department" class="form-label"><b>Id Department:</b> </label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $iddepartemen;?> name="IdDepartemen">
                </div>
                <div class="mb-3">
                    <label for="Id Branch" class="form-label"><b>Id Branch:</b> </label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $idbranch;?> name="IdBranch">
                </div>
                <div class="mb-3">
                    <label for="Id Bank" class="form-label"><b>Id Bank:</b></label>
                    <hr>
                    <input type="text" class="form-control" value=<?php echo $idbank;?> name="IdBank">
                </div>
                <div class="mb-3">
                    <label for="Nama karyawan" class="form-label"><b>Nama karyawan:</b></label>
                    <hr>
                    <input type="text" class="form-control" value=<?php echo $Nama;?> name="NamaKaryawan">
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label"><b>Alamat:</b></label>
                    <hr>
                    <input type="text" class="form-control" value=<?php echo $alamat;?> name="Alamat">
                </div>
            <button type="submit" class="btn btn-primary" name="UpdateKaryawan">Update</button>
            <a href="../tampil/tampil_karyawan.php" class="btn btn-danger">Kembali</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>     