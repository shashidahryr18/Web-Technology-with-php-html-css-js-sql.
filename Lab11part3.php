<?php
session_start();
echo "<h1>LOGOUT PAGE</h1>";

echo "<p style='color:'>";

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

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_destroy();
}
?>

<form action="" method="post">
    <button type="submit">LOGOUT</button>
</form>

<a href="Lab11part1.php">LOGIN</a><br>
<a href="Lab11part2.php">Go To Dashboard</a>