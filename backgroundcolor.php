<?php
$color="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_POST["id_color"]))
    {
    $color=$_POST["id_color"];
    }
}
?>
<html>
    <body style="background-color:
    <?php echo $color;?>">
      <form method="post">
        <label>Choose any color:</label>
        <input type="color" name="id_color"/>
        <button type="submit">Change Background Color</button>
        </form>
    </body>
    </html>
