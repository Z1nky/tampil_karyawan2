<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Branch</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="tambahbank">
        <h3>TAMBAH BRANCH</h3>
    </div>
    <form method="POST" action="tambah_branch.php">
        <div class="container">
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Id Branch:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Id Branch" name="IdBranch">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Nama Branch:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Nama Branch" name="NamaBranch">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Kode Branch:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Kode Branch" name="KodeBranch">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Alamat Branch:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Alamat Branch" name="AlamatBranch">
            </div>
            
            <button type="submit" class="btn btn-primary" name="KirimBranch">Kirim</button>
            <a href="../tampil/tampil_branch.php" class="btn btn-danger">Kembali</a>
        </div>

        <?php
        if(isset($_POST['KirimBranch'])){

        
        $IdBranch = $_POST['IdBranch'];
        $NamaBranch = $_POST['NamaBranch'];
        $KodeBranch = $_POST['KodeBranch'];
        $AlamatBranch = $_POST['AlamatBranch'];


        // koneksi
        include_once("../Koneksi/koneksi2.php");

        // insert

        try{
            $querybranch = "INSERT INTO branch (Id_Branch,Nama_Branch,Kode_Branch,Alamat_Branch) VALUES('$IdBranch','$NamaBranch','$KodeBranch','$AlamatBranch')";
            $result = mysqli_query($db, $querybranch);
        } catch (mysqli_sql_exception $e){
            var_dump($e);
            exit;
        }
            // Show message when user added
            echo "<script>Swal.fire({
                title: 'Success',
                text: 'Successfully Add Branch',
                icon: 'success',
                confirmButtonText: 'Oke'
                })</script>";
            
        }
        ?>
    </form>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>