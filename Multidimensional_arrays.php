<?php
$products = [
    ["name" => "Laptop", "price" => 45000, "stock" => "In Stock"],
    ["name" => "Mouse", "price" => 340, "stock" => "Out of Stock"]
];

echo $products[1]["price"] . "<br>";

foreach ($products as $key => $item) {
    echo "index of Product :" . $key . " - Name of Product :" . $item["name"] . "<br>";
}
?>
