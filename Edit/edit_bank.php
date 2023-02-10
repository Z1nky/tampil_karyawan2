<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Bank</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
        include_once("../Koneksi/koneksi2.php");

        $idbank1 = $_GET['Id_Bank'];
        $tampiledit = mysqli_query($db,"select * from bank where Id_bank = $idbank1");
        while($user_data = mysqli_fetch_array($tampiledit))
        {
            $idbank2 = $user_data['Id_Bank'];
            $namabank = $user_data['Nama_Bank'];
            $codebank = $user_data['Kode_Bank'];
            $gajih = $user_data['Gaji'];
        }

    ?>
    <div class="tambahbank">
        <h3>UPDATE BANK</h3>
    </div>
    <form method="POST" action="../action/actionbank.php">
        <div class="container">
            <div class="mb-3 mt-3">
                <label for="id bank" class="form-label"><b>Id Bank:</b></label>
                <hr>
                <input type="text" class="form-control"  value=<?php echo $idbank1;?> name="IdBank">
            </div>
            <div class="mb-3">
                <label for="nama bank" class="form-label"><b>Nama Bank:</b> </label>
                <hr>
                <input type="text" class="form-control"  value=<?php echo $namabank;?> name="NamaBank">
            </div>
            <div class="mb-3">
                <label for="kode bank" class="form-label"><b>Kode Bank:</b> </label>
                <hr>
                <input type="text" class="form-control"  value=<?php echo $codebank;?> name="KodeBank">
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label" name><b>Gaji:</b></label>
                <hr>
                <input type="text" class="form-control" value=<?php echo $gajih;?> name="Gaji">
            </div>
            <button type="submit" class="btn btn-primary" name="UpdateBank">Update</button>
            <a href="../tampil/tampil_bank.php" class="btn btn-danger">Kembali</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>     