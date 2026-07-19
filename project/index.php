<div style="width: 300px;background:#ccc;">
    <?php
    include "db_connect.php";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $key=$_POST["city_key"];
      $name=$_POST["city_name"];
      $s="insert into city(city_key,city_name) values('$key','$name')";
      $conn->query($s);
    }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <input type="text" name="city_key" placeholder="City Key"><br><br>
        <input type="text" name="city_name" placeholder="City Name"><br><br>
        <input type="submit" value="Submit">    
    </form>
    <?php
    $s="select city_name from city";
    $resultset=$conn->query($s);
    if($resultset->num_rows>0)
        {
        while($row=$resultset->fetch_assoc())
            {
            echo "<br>".$row["city_name"];
        }
    }
    else{
        echo "No data";
    }
?>

</div>
