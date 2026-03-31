<!DOCTYPE html>
<html>
<head>
    <title>Add Distributor</title>
</head>
<body>

<h2>Create Distributor</h2>

<form method="POST" action="create_distributor.php">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="text" name="mobile" placeholder="Enter Mobile" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Create Distributor</button>
</form>

</body>
</html>
<?php
include "db.php";

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$query = "INSERT INTO distributors(name,mobile,password,balance) 
VALUES('$name','$mobile','$password','0')";

if(mysqli_query($conn,$query)){
    echo "Distributor Created Successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>
