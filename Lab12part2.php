<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $color = $_POST['color'];

    // setcookie(name, value, expiration_time, path)
    // time() + 3600 means it expires in 1 hour
    setcookie("user_name", $name, time() + 3600, "/");
    setcookie("user_color", $color, time() + 3600, "/");

    header("Location: page2.php"); // Redirect to the next page
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Page 1: Settings</h2>

<form method="POST" action="">
    Name: <input type="text" name="username" required><br><br>
    Favorite Color: <input type="color" name="color"><br><br>
    <button type="submit">Save & Go to Page 2</button>
</form>

</body>
</html>