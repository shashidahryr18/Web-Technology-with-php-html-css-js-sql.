<?php
session_start();
echo "PAGE 1 <br>";
date_default_timezone_set("Asia/Kolkata");
$_SESSION['name'] = date("H:i:s");
?>
<br>
<a href="Lab10b.php">PAGE 2</a><br>
<a href="Lab10c.php">PAGE 3</a><br>
