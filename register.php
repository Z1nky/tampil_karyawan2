<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="mt-4">
        <h3><center><b>REGISTER</b></center></h3>
    </div>
    <form method="POST" action="register.php">
        <div class="container">
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Id User:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Id User" name="IdUser">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Nama :</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Nama" name="Nama">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Username :</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Username" name="Username">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Password :</b></label>
                <hr>
                <input type="Password" class="form-control"  placeholder="Enter Password" name="Password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="register">Buat User</button>
            <a href="login.php" class="btn btn-danger">Kembali</a>
        </div>

        <?php
        if(isset($_POST['register'])){

        
        $IdUser = $_POST['IdUser'];
        $Nama = $_POST['Nama'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];


        // koneksi
        include_once("Koneksi/koneksi2.php");

        // insert

        try{
            $queryuser = "INSERT INTO users (id_user,nama,username,password)VALUES('$IdUser','$Nama','$Username','$Password')";
            $result = mysqli_query($db, $queryuser);
        } catch (mysqli_sql_exception $e){
            var_dump($e);
            exit;
        }
            // Show message when user added
            echo "<script>Swal.fire({
                title: 'Success',
                text: 'Successfully Add User',
                icon: 'success',
                confirmButtonText: 'Oke'
                })</script>";
                header( "refresh:2;url=login.php" );
        }
        ?>
    </form>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>