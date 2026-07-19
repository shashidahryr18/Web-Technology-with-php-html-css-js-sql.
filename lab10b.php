<?php
session_start();
echo "<h1>PAGE 2</h1>";
if(isset($_SESSION['name'])){
echo $_SESSION['name'];}"\n"
?>
<br>
<a href="Lab10a.php">PAGE 1</a>
<a href="Lab10c.php">PAGE 3</a>