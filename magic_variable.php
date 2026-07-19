Code:  
<?php 
echo "<h3>PHP Magic Constants Practical</h3>"; 
echo "You are currently at line number: " . __LINE__ . "<br>"; 
echo "The full path of this file is: " . __FILE__ . "<br>"; 
echo "The directory of this file is: " . __DIR__ . "<br>"; 
function testMagic() { 
echo "The name of this function is: " . __FUNCTION__; 
} 
testMagic(); 
?>

<?php
// Pattern printing
$r = 3;
$c = 2;

for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
        echo "ICT ";
    }
    echo "<br>";
}

// Time-based greeting
$x = date("H");

if ($x < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}

echo "<br>";

// Day-based message
$D = date("D");

switch ($D) {
    case "Mon":
        echo "Good Monday!!";
        break;

    case "Tue":
        echo "Good Tuesday!!";
        break;

    default:
        echo "Good Luck";
}

echo "<br><br>";

// Student marks and grades
$student = array(
    "Ram" => 40,
    "Sita" => 70,
    "Lakshman" => 80
);

foreach ($student as $name => $marks) {

    if ($marks > 75) {
        echo "<div style='color:gold'>";
        echo "$name => $marks => A";
        echo "</div>";
    } 
    else if ($marks > 50) {
        echo "<div style='color:silver'>";
        echo "$name => $marks => B";
        echo "</div>";
    } 
    else {
        echo "<div style='color:brown'>";
        echo "$name => $marks => C";
        echo "</div>";
    }
}
?>
