<?php
$MN = 0;
$Mname = array(
    "1->January", "2->February", "3->March", "4->April",
    "5->May", "6->June", "7->July", "8->August",
    "9->September", "10->October", "11->November", "12->December"
);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["MN"]))
    {
        $MN = $_POST["MN"];
    }
}
?>

<html>
<body>
<p>
<?php echo "Month name is: " . $Mname[$MN-1] . "<br>"; ?>
</p>

<form method="post">
    <label>Enter month number: </label>
    <input type="number" name="MN"/>
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>
