<?php
$host="127.0.0.1";
$user="root";
$pwd="root@123";

$conn=new mysqli($host,$user,$pwd,"university_db");

if($conn->connect_error){
    die("Failed");
}
else echo "Success";
?>

<form method="post">
    <input type="text" name="city_name" placeholder="Enter city name" required>
    <button type="submit">INSERT</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['city_name'];
    $s="INSERT INTO city(city_name) VALUES ('$name')";
    $conn->query($s);
}

$s="SELECT city_ID, city_name FROM city";
$rs=$conn->query($s);

if($rs && $rs->num_rows>0){
    while($r=$rs->fetch_assoc()){
        echo $r['city_ID']." | ".$r['city_name']."<br>";
    }
}

$conn->close();
?>