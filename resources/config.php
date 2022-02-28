<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "finaldb";

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$connect){
    echo "<script>alert('Connection failed!')</script>";
}

?>
