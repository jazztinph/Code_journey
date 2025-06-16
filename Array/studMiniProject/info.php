<?php

declare(strict_types=1);
/*

    Author: Justin Domanais

    🎯 Scenario: Student Records Management
    You’re building a mini system that handles student records for a college.
    Each student has a name, age, course, and grades for 3 subjects. */

//📝 Task 1: Create a Multidimensional Array
/*Create an array called $students that contains 3 students. Each student should have:
    Name
    Age
    Course
    Grades: an associative array with 3 subjects (Math, Science, English)*/

$products = [
    [
        "Product" => "T-Shirt",
        "Category" => "Clothing",
        "Price" => "$10"
    ],
    [
        "Product" => "Laptop",
        "Category" => "Electronics",
        "Price" => "$899"
    ],
    [
        "Product" => "Mug",
        "Category" => "Home",
        "Price" => "$5"
    ],
    [
        "Product" => "Bike",
        "Category" => "Garage",
        "Price" => "$6"
    ]
];

foreach ($products as $product) {
    echo "Product: " . $product['Product'] . "<br>";
    echo "Category: " . $product['Category'] . "<br>";
    echo "Price: " . $product['Price'] . "<br>";
    echo "---------------------------<br>";
}
