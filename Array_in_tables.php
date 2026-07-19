<?php
$products = [
    ["name" => "Laptop", "price" => 45000, "stock" => "In Stock"],
    ["name" => "Mouse", "price" => 340, "stock" => "Out of Stock"]
];

echo "<table border=1>";
echo "<tr><td>key</td><td>Name</td><td>Price</td></tr>";

foreach ($products as $key => $item) {
    echo "<tr><td>" . $key . "</td><td>" . $item["name"] . "</td><td>" . $item["price"] . "</td></tr>";
}

echo "</table>";
?>
