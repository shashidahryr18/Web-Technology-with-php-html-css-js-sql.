<?php
  $i=0;
    $arr=array(1,2,3);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['i']))
     {
        $i = $_POST['i'];
        }
    }
    ?>
<html>
<body>
    <p>
    <?php echo "<h3>Table of ".$i. "</h3>";
    for($a=1;$a<=10;$a++)
    {
        echo $i." x ".$a." = ".$a*$i."<br>";

    }
    ?></p>
<form method="post">
    <label>Enter number: </label>
    <input type="number" name="i"/>
    <button type="submit">Submit</button>
</form>