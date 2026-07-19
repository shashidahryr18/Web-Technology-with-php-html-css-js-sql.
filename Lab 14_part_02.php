<?php
$host="127.0.0.1";
$user="root";
$pwd="root@123";

$conn=new mysqli($host,$user,$pwd,"university_DB");
if($conn->connect_error){echo "Failed";}
else{echo "Success";}
?>

<div style="width: 300px;background:#ccc;">
    <?php
    include "db_connection.php";
    $s = "select i from T1";
    $resultset=$conn->query($s);
    if($resultset->num_rows>0)
        {
            while($row=$resultset->fetch_assoc())
                {
                    echo "<br>".$row['i'];
                }
        }
        ?>
</div>
