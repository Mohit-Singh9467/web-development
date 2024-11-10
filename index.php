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

    <h1>User List</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <ul class="user-list">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li class="user-item">
                    <h2><?php echo htmlspecialchars($row['username']); ?></h2>
                    <p>Email: <?php echo htmlspecialchars($row['email']); ?></p>
                    <p>Joined: <?php echo date('F j, Y', strtotime($row['timecreated'])); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

    <?php $connection->close(); ?>
</body>
</html>