<?php
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_username']) && isset($_POST['id_password'])) {
        $username = $_POST['id_username'];
        $password = $_POST['id_password'];
    }
}
?>

<html>
<body>

<p>
    Your UserName: <?php echo $username; ?><br>
    Your Password : <?php echo $password; ?>
</p>

<form method="post">
    <label>Enter your username </label>
    <input type="text" name="id_username"/><br>

    <label>Enter your password </label>
    <input type="password" name="id_password"/><br>

    <button type="submit">LOGIN</button>
</form>

</body>
</html>
