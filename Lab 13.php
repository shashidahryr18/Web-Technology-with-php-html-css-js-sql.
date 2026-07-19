<?php
$host="127.0.0.1";
$user="root";
$pwd="root@123";

$conn = new mysqli($host, $user, $pwd, "world");
if($conn->connect_error){echo "Failed";}
else{echo "Success";}
?>
