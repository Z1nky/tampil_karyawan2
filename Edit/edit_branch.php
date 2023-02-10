<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Branch</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
        include_once("../Koneksi/koneksi2.php");

        $idbranch1 = $_GET['Id_Branch'];
        $tampiledit = mysqli_query($db,"select * from branch where Id_Branch = $idbranch1");
        while($user_data = mysqli_fetch_array($tampiledit))
        {
            $idbranch2 = $user_data['Id_Branch'];
            $namabranch = $user_data['Nama_Branch'];
            $codebranch = $user_data['Kode_Branch'];
            $alamatbranch = $user_data['Alamat_Branch'];
        }

    ?>
    <div class="tambahbank">
        <h3>UPDATE Branch</h3>
    </div>
    <form method="POST" action="../action/actionbranch.php">
        <div class="container">
            <div class="mb-3 mt-3">
                    <label class="form-label"><b>Id Branch:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $idbranch2;?> name="IdBranch">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Nama Branch:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $namabranch;?> name="NamaBranch">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Kode Branch:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $codebranch;?> name="KodeBranch">
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label"><b>Alamat Branch:</b></label>
                    <hr>
                    <input type="text" class="form-control"  value=<?php echo $alamatbranch;?> name="AlamatBranch">
                </div>
            <button type="submit" class="btn btn-primary" name="UpdateBranch">Update</button>
            <a href="../tampil/tampil_branch.php" class="btn btn-danger">Kembali</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>     