<?php
include 'config.php';

$result = mysqli_query($conn,"SELECT * FROM distributors");

while($row = mysqli_fetch_assoc($result)){
  echo $row['name']." - ".$row['mobile']."<br>";
}
?>
