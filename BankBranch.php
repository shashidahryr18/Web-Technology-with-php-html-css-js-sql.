<?php
$BankBranch="SpeedWell";
function getBB(){
    global $BankBranch;
    return $BankBranch;
}   

function setBB($bb){
    global $BankBranch;
    $BankBranch=$bb;
}

?>