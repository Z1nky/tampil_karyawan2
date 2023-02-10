<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Karyawan</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include_once("../Koneksi/koneksi2.php");

    if(isset($_POST['UpdateKaryawan'])) {


    $idkaryawan3 = $_POST['IdKaryawan'];
    $iddepartemen3 = $_POST['IdDepartemen'];
    $idbranch = $_POST['IdBranch'];
    $idbank = $_POST['IdBank'];
    $namakaryawan = $_POST['NamaKaryawan'];
    $alamat = $_POST['Alamat'];

    // include database connection file
    

    // Insert user data into table

    try { 
    $query = "UPDATE karyawan SET Id_Karyawan='$idkaryawan3',Id_Departemen='$iddepartemen3',Id_Branch='$idbranch',Id_Bank='$idbank',Nama='$namakaryawan',Alamat='$alamat' WHERE Id_Karyawan = $idkaryawan3;";
    $result = mysqli_query($db, $query); 
    } catch (mysqli_sql_exception $e) { 
    var_dump($e);
    exit; 

    } 
echo "<script>Swal.fire({
    title: 'Success!',
    text: 'Successfully Edit Karyawan',
    icon: 'success',
    confirmButtonText: 'Oke!'
    })</script>";
    header( "refresh:2;url=../tampil/tampil_karyawan.php" );
}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    </body>
</html>     