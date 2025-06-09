<?php
// Author: Justin Domanais
// Date: 6-9-2025
//Task 1: Indexed Array Task
$colors = ["Blue", "Red", "Green", "Yellow", "Purple"];

echo "Favorite Colors: \n";
for ($i = 0; $i < count($colors); $i++) {
    echo $i + 1 . ". " . $colors[$i] . "\n";
}

// 🧩 Task 2: Associative Array Task

$student = [
    "name" => "Jazztin",
    "age" => 21,
    "course" => "BSIS"
];

echo "\nStudent Information:\n\n";
foreach ($student as $info => $value) {
    // ucfirst() convert first letter to be Uppercase.
    echo ucfirst($info) . ": $value\n";
}
