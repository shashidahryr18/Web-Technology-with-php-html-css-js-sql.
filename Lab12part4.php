<?php
$name = $_COOKIE['user_name'] ?? "Guest";
?>

<!DOCTYPE html>
<html>
<body>

<h2>Page 3: Final Destination</h2>
<p>Still here, <?php echo $name; ?>?</p>
<p>Cookies allow this data to follow you across the whole domain.</p>

<a href="page2.php">Back to Page 2</a>

</body>
</html>