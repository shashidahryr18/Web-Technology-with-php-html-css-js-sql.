<?php
include "db_connection.php";

$s = "SHOW TABLES";
$resultset = $conn->query($s);

if ($resultset->num_rows > 0) {
    while ($row = $resultset->fetch_assoc()) {
        echo "<br>" . $row['Tables_in_world'];
    }
}
?>
