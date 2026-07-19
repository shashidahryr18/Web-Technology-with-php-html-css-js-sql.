<div style="width: 300px; background-color
<?php
include "db_connection_lab14.php";

$s= "select i from T1";
$resultset=$conn->query($s);
if($resultset->num_rows>0)
{
    while($row=$resultset->fetch_assoc())
    {
        echo "<br>" . $row['Tables_in_lab14'];
    }
}
?>