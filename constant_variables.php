<?php
    function inc () {
        static $x=10;
        $x++;
        echo $x;
    }
    inc();echo"<br>";
    inc();echo"<br>"; 
    inc();
?>

