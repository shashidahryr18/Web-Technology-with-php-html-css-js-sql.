<?php
   include "variables.php";
   $ia = interest_amount(1000, 0.02);
    echo "<br>Interest Amount: " . $ia;
    $ia = interest_amount(2000, 0.01);
    echo "<br>Interest Amount: " . $ia;
    include "BankBranch.php";
    setBB("Ambavadi");
    echo "<br>Bank Branch is " .getBB();
?>