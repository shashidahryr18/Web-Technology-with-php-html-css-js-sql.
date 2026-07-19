<?php
session_start();
echo "<h1>PAGE 2</h1><p style='color:'>";

if(isset($_SESSION['color'])){
    echo $_SESSION['color'];
}

echo "> Welcome, ";

if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}

echo " !!!</p>";

if(isset($_SESSION['last_login'])){
    echo "<p>Session started at:";
    echo $_SESSION['last_login'];
    echo "</p>";
}
?>

<a href="Lab11part2.php">LOGIN</a><br>
<a href="Lab11part3.php">LOGOUT</a>