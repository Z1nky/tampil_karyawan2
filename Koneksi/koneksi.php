<?php
define('db_server', '127.0.0.1:3307');
define('db_username', 'root');
define('db_password', '');
define('db_database', 'intership_union');

$db = mysqli_connect(db_server,db_username,db_password,db_database);

if($db->connect_error){
    die("Connection Failed:" . $db->connect_error);
}
echo "Connected succesfully";
?>