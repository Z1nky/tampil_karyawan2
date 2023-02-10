<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Karyawan</title>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="tambahbank">
        <h3>TAMBAH KARYAWAN</h3>
    </div>
    <form method="POST" action="tambah_karyawan.php">
        <div class="container">
            <div class="mb-3 mt-3">
                <label for="id Karyawan" class="form-label"><b>Id Karyawan:</b></label>
                <hr>
                <input type="text" class="form-control"  placeholder="Enter Id" name="IdKaryawan">
            </div>
            <div class="mb-3">
                <label for="Id Department" class="form-label"><b>Id Department:</b> </label>
                <hr>
                <!-- <input type="text" class="form-control"  placeholder="Enter Id Department" name="IdDepartemen"> -->
                <div class="form-group">
                    <select id="iddepartment" name="iddepartment">

                    <option> Silahkan Pilih..</option>

                        <?php
                        include_once("../Koneksi/koneksi2.php");
                        $query = mysqli_query($db,"SELECT Id_Departemen,Nama_Departemen FROM departemen");

                        while ($row = mysqli_fetch_array($query)) {

                        ?>

                            <option value="<?php echo $row['Id_Departemen']; ?>">

                                <?php echo $row['Nama_Departemen']; ?>

                            </option>

                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="Id Branch" class="form-label"><b>Id Branch:</b> </label>
                <hr>
                <!-- <input type="text" class="form-control"  placeholder="Enter Id Branch" name="IdBranch"> -->
                <div class="form-group">
                    <select id="idbranch" name="idbranch">

                    <option> Silahkan Pilih..</option>

                        <?php
                        include_once("../Koneksi/koneksi2.php");
                        $query = mysqli_query($db,"SELECT Id_Branch,Nama_Branch FROM branch");

                        while ($row = mysqli_fetch_array($query)) {

                        ?>

                            <option value="<?php echo $row['Id_Branch']; ?>">

                                <?php echo $row['Nama_Branch']; ?>

                            </option>

                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="Id Bank" class="form-label"><b>Id Bank:</b></label>
                <hr>
                <!-- <input type="text" class="form-control" placeholder="Enter Id Bank" name="IdBank"> -->
                <div class="form-group">
                    <select id="idbank" name="idbank">

                    <option> Silahkan Pilih..</option>

                        <?php
                        include_once("../Koneksi/koneksi2.php");
                        $query = mysqli_query($db,"SELECT Id_Bank,Nama_Bank FROM bank");

                        while ($row = mysqli_fetch_array($query)) {

                        ?>

                            <option value="<?php echo $row['Id_Bank']; ?>">

                                <?php echo $row['Nama_Bank']; ?>

                            </option>

                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="Nama karyawan" class="form-label"><b>Nama karyawan:</b></label>
                <hr>
                <input type="text" class="form-control" placeholder="Enter Nama" name="NamaKaryawan">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label"><b>Alamat:</b></label>
                <hr>
                <input type="text" class="form-control" placeholder="Enter Alamat" name="Alamat">
            </div>
            <div>
            <button data-toggle="modal" type="submit" class="btn btn-primary" name="KirimKaryawan" >Kirim</button>

            <a href="../tampil/tampil_karyawan.php" class="btn btn-danger">Kembali</a>

        </div>
        

        
        <?php
        if(isset($_POST['KirimKaryawan'])){

        
        $IdKaryawan = $_POST['IdKaryawan'];
        $IdDepartemen = $_POST['iddepartment'];
        $IdBranch = $_POST['idbranch'];
        $IdBank = $_POST['idbank'];
        $NamaKaryawan = $_POST['NamaKaryawan'];
        $Alamat = $_POST['Alamat'];


        // koneksi
        include_once("../Koneksi/koneksi2.php");

        // insert

        try{
            $querykaryawan = "INSERT INTO karyawan(Id_Karyawan,Id_Departemen,Id_Branch,Id_Bank,Nama,Alamat) VALUES('$IdKaryawan','$IdDepartemen','$IdBranch','$IdBank','$NamaKaryawan','$Alamat')";
            $result = mysqli_query($db, $querykaryawan);
        } catch (mysqli_sql_exception $e){
            var_dump($e);
            exit;
        }
            // Show message when user added
            echo "<script>Swal.fire({
                title: 'Success',
                text: 'Successfully Add Karyawan',
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