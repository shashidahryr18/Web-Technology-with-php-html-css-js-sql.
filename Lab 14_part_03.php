<?php
$host="127.0.0.1";
$user="root";
$pwd="root@123";

$conn=new mysqli($host,$user,$pwd,"university_db");

if($conn->connect_error){
    echo "Failed";
}
else echo "Success";
?>

<?php
$s="SHOW TABLES";
$resultset=$conn->query($s);

if($resultset && $resultset->num_rows>0){
    while($row=$resultset->fetch_assoc()){
        echo "<br>".$row['Tables_in_university_db'];
    }
}
?>