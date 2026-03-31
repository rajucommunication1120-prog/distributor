<?php
$conn = mysqli_connect("localhost","username","password","recharge_app");

if(!$conn){
  die("DB Failed");
}
?>
<form method="POST" action="save_distributor.php">
  Name: <input type="text" name="name"><br>
  Mobile: <input type="text" name="mobile"><br>
  <button type="submit">Create</button>
</form>
<?php
include 'config.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];

mysqli_query($conn, "INSERT INTO distributors (name,mobile) VALUES ('$name','$mobile')");

echo "Distributor Created";
?>
<?php
include 'config.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];

mysqli_query($conn, "INSERT INTO distributors (name,mobile) VALUES ('$name','$mobile')");

echo "Distributor Created";
?>
echo "Working";
