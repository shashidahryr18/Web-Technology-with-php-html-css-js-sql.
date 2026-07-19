<?php
$products = [
    ["Laptop", 45000, "In Stock"],
    ["Mouse", 340, "Out of Stock"]
];

// Accessing price of 2nd product
echo $products[1][1] . "<br>";

foreach ($products as $key => $item) {
    echo "Index of Product: " . $key . " - Name of Product: " . $item[0] . "<br>";
}
?>
