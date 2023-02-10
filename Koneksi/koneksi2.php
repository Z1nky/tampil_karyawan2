<?php
    $server = '127.0.0.1:3307';
    $user = 'root';
    $pass = "";
    $namadb = "intership_union";

    $db = mysqli_connect($server, $user, $pass, $namadb);

    if($db->connect_error){
        die("Connection Failed:" . $db->connect_error);
    }
    // echo "Connected succesfully";
?>