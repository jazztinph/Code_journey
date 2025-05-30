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
    // // Create an instance of the class
    // $users1 = new users("Clean Code", "Robert C. Martin", 2008);

    // // Display books details
    // echo "Users Information:<br><br>";
    // echo $users1->getInfo() . "<br>";

    $uName = "Justin";
    $bottles = 5;

    $deposit = new Deposit($uName, $bottles);

    echo $deposit->getDepositMessage();
    ?>
</body>

</html>