<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Branch</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include_once("../Koneksi/koneksi2.php");

    if(isset($_POST['UpdateBranch'])) {


    $idbranch3 = $_POST['IdBranch'];
    $namabranch = $_POST['NamaBranch'];
    $codebranch = $_POST['KodeBranch'];
    $alamatbrach = $_POST['AlamatBranch'];

    // include database connection file
    

    // Insert user data into table

    try { 
    $query = "UPDATE branch SET Id_branch='$idbranch3',Nama_Branch='$namabranch',Kode_Branch='$codebranch',Alamat_Branch='$alamatbrach' WHERE Id_Branch = $idbranch3;";
    $result = mysqli_query($db, $query); 
    } catch (mysqli_sql_exception $e) { 
    var_dump($e);
    exit; 

    } 
echo "<script>Swal.fire({
    title: 'Success!',
    text: 'Successfully Edit Branch',
    icon: 'success',
    confirmButtonText: 'Oke!'
    })</script>";
    header( "refresh:2;url=../tampil/tampil_branch.php" );
}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    </body>
</html>     