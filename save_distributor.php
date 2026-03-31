<?php
include 'config.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = md5($_POST['password']);

mysqli_query($conn, "INSERT INTO distributors (name,mobile,password) 
VALUES ('$name','$mobile','$password')");

echo "Distributor Created";
?>
