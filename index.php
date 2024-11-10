<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Load the database connection file
    require_once 'database.php';

    // Connect to the database
    $connection = connectDB();

    // SQL query to fetch user data
    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);
    ?>

    
</body>
</html>