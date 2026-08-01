<?php
$i = 1;
$msg = "";
$temp = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['i']))
    {
        $i = $_POST['i'];

        if (isArmstrong(num: $i))
        {
            $msg = $i . " is Armstrong Number";
        }
        else
        {
            $msg = $i . " is not an Armstrong Number";
        }
    }
}
function isArmstrong($num): bool
{
    $originalNum = $num;
    $sum = 0;
    $totalDigits = strlen((string)$num);
    $temp = $num;

    while ($temp > 0)
    {
        $digit = $temp % 10;
        $sum += pow($digit, $totalDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $originalNum;
}
?>
<html>
<body>
<p><?php echo "<h3>" . $msg . "</h3>"; ?></p>
<form method="post">
    <label>Enter Number: </label>
    <input type="number" name="i"/>
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>
