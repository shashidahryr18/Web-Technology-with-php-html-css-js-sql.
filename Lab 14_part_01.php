<?php
$host="127.0.0.1";
$user="root";
$pwd="root@123";
$conn = new mysqli($host,$user,$pwd,"university_DB");
if($conn->connect_error)
    {
        die("connection failed: ".$conn->connect_error);
    }
    $sql="SHOW DATABASES";
    $result = $conn->query($sql);
    if($result->num_rows>0)
        {
            echo "<h3>Databases:</h3><ul>";
            while($row = $result->fetch_assoc())
                {
                    echo "<li>".$row["Database"]."</li>";
                }
                echo "<ul>";
        }
        else
            {
                echo "0 results";
            }

            #$conn->close();
?>
