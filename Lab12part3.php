<?php
// Check if cookies exist, otherwise set defaults
$name = $_COOKIE["user_name"] ?? "Guest";
$color = $_COOKIE["user_color"] ?? "#ffffff";
?>

<!DOCTYPE html>
<html>
<body style="background-color: <?php echo $color; ?>">

<h2>Page 2: Welcome</h2>
<p>Hello, <strong><?php echo $name; ?></strong>!</p>
<p>The background color is pulled from your cookie.</p>

<a href="page3.php">Go to Page 3</a><br>
<a href="page1.php">Change Settings</a>

</body>
</html>