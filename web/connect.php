<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "molseka_investments";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the "blog_posts" table
    $sql = "CREATE TABLE IF NOT EXISTS blog_posts (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $pdo->exec($sql);
    echo '<script>alert("Table \'blog_posts\' created successfully.");</script>';
} catch(PDOException $e) {
    echo '<script>alert("Error creating table: ' . $e->getMessage() . '");</script>';
}
?>
