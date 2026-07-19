<?php
session_start();
    $theme="light";
    if(isset($_GET['set_theme'])){
        $_SESSION['theme']=$_GET['set_theme'] ?? "light ";
     header("Location:".$_SERVER['PHP_SELF']."?set_theme=dark");
     }
?>
<html>
    <body>
        <?php echo $_SESSION['theme']; ?>
        <a href="?set_theme=dark">go to🌙 Dark Mode</a>
    </body>
</html>