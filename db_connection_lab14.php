<?php
$host="localhost";
$username="root";
$password="";
$pwd="";

$conn=new mysqli($host,$user,$pwd);

if($conn->connect_error){echo "failed";}
else{echo "success";}
?>