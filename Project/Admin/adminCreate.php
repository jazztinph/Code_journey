<?php
if($_POST){
    $username = $_POST['username'];
    $pass = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin</title>
</head>
<body>
    
<form action="adminCreate.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Create Admin</button>
</form>

<?php
if(isset($username) && isset($pass)) {
    echo "<h2>Admin Created</h2>";
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Password: " . htmlspecialchars($pass) . "</p>";
}
?>
</body>
</html>
