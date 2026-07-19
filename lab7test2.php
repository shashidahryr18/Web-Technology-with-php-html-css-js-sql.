<?php

$name = "";
$reverse = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_name'])) {
        $name = $_POST['id_name'];
        $reverse = strrev($name);
    }
}

?>

<html>
<body>

<p>
    Original Name: <?php echo $name; ?><br>
    Reverse Name : <?php echo $reverse; ?>
</p>

<form method="post">
    <label>Enter your name </label>
    <input type="text" name="id_name"/>
    <button type="submit">Display</button>
</form>

</body>
</html>
