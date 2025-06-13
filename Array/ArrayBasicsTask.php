<?php
// Author: Justin Domanais
// Date: 6-9-2025

//Task 1: Indexed Array Task
$colors = ["Blue", "Red", "Green", "Yellow", "Purple"]; //black ... gold added.

// changing index value
$colors[2] = "Yellow Green";
// add one item on array
$colors[] = "Black";
// add multiple items
array_push($colors, "Teal", "Magenta", "Gold");
// deleting array
array_splice($colors, 7, 2); // removed magenta and gold.
unset($colors[2]); //remove yellow green color.
$colors = array_values($colors); //Before looping, reindex the array using array_values():

echo "Favorite Colors: \n<br>";

function forColors($colors)
{
    for ($i = 0; $i < count($colors); $i++) {
        echo "<br>" . $i + 1 . ". " . $colors[$i] . "\n";
    }
}
function displayColors($colors)
{
    foreach ($colors as $c) {
        echo "<br>" . $c;
    }
}


$myFunc = ["Justin", "forColors", "displayColors"];
// DisplayColors
$myFunc[2]($colors);
echo "<br>";
// forColors
$myFunc[1]($colors);


// 🧩 Task 2: Associative Array Task

$student = [
    "name" => "Jazztin",
    "age" => 21,
    "course" => "BSIS",
    "Status" => "Taken"
];
// changing value
$student['age'] = 22;
// adding new item
$student["Section"] = 304;
//add multiple item
$student += ["Sex" => "Male", "Birthyear" => 2002];
// // remove item
// // unset($student["Status"]); //remove status

// //remove in associative array / new array
// $arrayNewStud = array_diff($student, ["Taken"]);

//remove the last item on array.
array_pop($student); // Removes the last key-value pair (Birthyear).
// remove the first item on array (removed name key).
array_shift($student);

echo "<br><br>Student Information:<br>";

// using foreach
foreach ($student as $info => $value) {
    // ucfirst() convert first letter to be Uppercase.
    echo "<br>" . ucfirst($info) . ": $value";
}


// 
