<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root@123";
$conn = new mysqli($servername, $username, $password,"testDB");

if ($conn -> connect_error){
 echo "Failed";
}
else {
 echo "Success";
}
?>

