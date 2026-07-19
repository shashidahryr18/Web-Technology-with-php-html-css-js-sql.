<?php
$host="127.0.0.1";
$user="root";
$pwd="Mysqldeva@123";

$conn = new mysqli($host,$user,$pwd,"university_DB");
$s = "Select city_ID,city_name from city";
$resultSet = $conn->query($s);
if($resultSet->num_rows>0)
    {
        while($row=$resultSet->fetch_assoc())
            {
                echo $row['city_ID']."|".$row['city_name']."<br>";
            }
    }
    $conn->close();
?>
