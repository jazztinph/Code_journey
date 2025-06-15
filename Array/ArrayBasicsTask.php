<?php

declare(strict_types=1);
// Author: Justin Domanais
// Date: 2025-06-09

// 🧩 Task 1: Indexed Array Task
$colors = (array) ["Blue", "Red", "Green", "Yellow", "Purple"];

// Modify a value by index
$colors[2] = "Yellow Green";

// Add one item
$colors[] = "Black";

// Add multiple items
$arrayPush = array_push($colors, "Teal", "Magenta", "Gold");

// Remove items
array_splice($colors, 7, 2); // Removes "Magenta" and "Gold"
unset($colors[2]); // Removes "Yellow Green"

// Reindex array to avoid gaps
$colors = array_values($colors);

// Display message
echo "🎨 Favorite Colors:<br>";

// Function to display using a for loop
function forColors($colors)
{
    for ($i = 0; $i < count($colors); $i++) {
        echo "<br>" . ($i + 1) . ". " . $colors[$i];
    }
}

// Function to display using foreach loop
function displayColors($colors)
{
    foreach ($colors as $c) {
        echo "<br>" . $c;
    }
}

// Function dispatcher (dynamic call)
$myFunc = ["Justin", "forColors", "displayColors"];

echo "<br><strong>Using displayColors():</strong><br>";
$myFunc[2]($colors);

echo "<br><br><strong>Using forColors():</strong><br>";
$myFunc[1]($colors);


//----------------------------------------------------------



// 🧩 Task 2: Associative Array Task Using Class with Constructor

class Student
{
    public string $name;
    public int $age;
    public string $course;
    public string $status;
    protected array $additionalInfo;

    // 🏗 Constructor to initialize values
    public function __construct(
        string $name,
        int $age,
        string $course,
        string $status,
        array $additionalInfo = []
    ) {
        $this->name = $name;
        $this->age = $age; // Casting string to int
        $this->course = $course;
        $this->status = $status;
        $this->additionalInfo = $additionalInfo;
    }

    // ➕ Add multiple key-value items
    public function addInfo(array $info): void
    {
        $this->additionalInfo += $info;
    }

    // ➖ Remove last item in additional info
    public function removeLastInfo(): void
    {
        array_pop($this->additionalInfo);
    }

    // ➖ Remove first item in additional info
    public function removeFirstInfo(): void
    {
        array_shift($this->additionalInfo);
    }

    // 📄 Display all information
    public function display(): void
    {
        echo "<br><br>🧑‍🎓 Student Information:<br>";
        echo "<br>Name: {$this->name}";
        echo "<br>Age: {$this->age}";
        echo "<br>Course: {$this->course}";
        echo "<br>Status: {$this->status}";

        foreach ($this->additionalInfo as $key => $value) {
            echo "<br>" . ucfirst($key) . ": $value";
        }
    }
}

// ✅ Create instance
$student = new Student(
    name: "Jazztin",
    age: 22,
    course: "BSIS",
    status: "Taken"
);

// ➕ Add items
$student->addInfo([
    "Section" => 304,
    "Sex" => "Male",
    "Birthyear" => 2002
]);

// ➖ Remove items
// $student->removeLastInfo();  // Removes Birthyear
// $student->removeFirstInfo(); // Removes Section

// 📤 Display
$student->display();
