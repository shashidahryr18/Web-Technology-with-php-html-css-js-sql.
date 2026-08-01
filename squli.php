<?php
$servername = "";
$username ="";
$password = "";
$dbname = "";
//1 connect
$conn = new mysqli($servername, $username, $password, $dbname);
//2 check connection
if ($conn->connect_error){
    echo "Failed";
}
else{echo "success";}
//2 query
$sql = "SELECT  city_key, city_name FROM city";
$result = $conn->query($sql);

//3 display
if ($result->num_rows > 0) {
    echo "<h2>City key | City Name</h2>";
    while($row = $result->fetch_across()){
        echo "key: " . $row["city_key"]." Name: " . $row["city_name"]."<br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
