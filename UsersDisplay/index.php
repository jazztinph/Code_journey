<?php
include '../UsersDisplay/Displayinfo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--  -->

<body>
    <?php
    // Create an instance of the class
    $users1 = new users("Clean Code", "Robert C. Martin", 2008);
    $users2 = new users("Atomic Habits", "James Clear", 2018);

    // Display books details
    echo "Summary: <br>";
    echo $users1->getSummary() . "<br>";
    echo $users2->getSummary() . "<br><br>";
    // Output the details

    echo "{$users1->title} by {$users1->author} Published in {$users1->yearPublished}";
    echo "<br>";
    echo "{$users2->title} by {$users2->author} Published in {$users2->yearPublished}";
    ?>
</body>

</html>