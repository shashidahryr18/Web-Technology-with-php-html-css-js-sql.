<?php
session_start();
echo "<h1>PAGE 1</h1>";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['id_name'])){
        $_SESSION['name'] = $_POST['id_name'];
    }

    if(isset($_POST['id_color'])){
        $_SESSION['color'] = $_POST['id_color'];
    }

    date_default_timezone_set('Asia/Kolkata');
    $_SESSION['last_login'] = date("H:i:s");

    echo "Session Variable is set.";
}
?>


<form action="" method="post">
    <label>Enter Name:</label>
    <input name="id_name" type="text">
    <br>

    <input name="id_color" type="color">
    <br>

    <button type="submit">Set Session</button>
</form>

<a href="2.php">GO TO DASHBOARD</a><br>
<a href="3.php">LOGOUT</a>