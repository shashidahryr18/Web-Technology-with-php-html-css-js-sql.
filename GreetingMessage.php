<?php
$r=3;
$c=2;

for($i=0;$i<$r;$i++)
    {
        for($j=0;$j<$c;$j++)
            {
                echo "ICT ";
            }
            echo "<br>"; 
    }
          
?> 

<?php
$x=date("H");
if($x<12)
{
    echo "Good Morning";
}
else
    {
        echo "Good afternoon";
    }
    ?>
    <br>
    <?php
$D = date("D");
switch($D)
{
    case "Mon":
    echo "Good Monday";
    break;

    case "Tue":
    echo "Good Tuesday";
    break;

    Default:
    echo "Good Luck";

}; 
?>

<?php   
$student = array("RAM"=>40,"SITA"=>70,"LAKSHMAN"=>80);
foreach($student as $name=>$marks){
    if($marks>75)
        {
            echo "<div style ='color:gold'>";
            echo $name."=>".$marks."=>A</div>";
        }
    
    else if($marks>50)
        {
            echo "<div style ='color:silver'>";
            echo $name."=>".$marks."=>B</div>";
        }

    else 
        {
            echo "<div style ='color:brown'>";
            echo $name."=>".$marks."=>C</div>";
        }       
}
?>
