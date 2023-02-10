<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hapus Branch</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    $idbranch = $_GET['Id_Branch'];
    
    include_once("../Koneksi/koneksi2.php");

    // Insert user data into table
    $query = "delete from branch where Id_Branch = $idbranch";
    $result = mysqli_query($db, $query); 

?>

<script>Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Kamu tidak Bisa Kembali!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#00a65a',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    } 
})</script>

<?php 
    header( "refresh:2;url=../tampil/tampil_branch.php" );
?>

</body>
</html>
