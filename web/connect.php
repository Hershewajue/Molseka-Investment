<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "molseka_investments";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the connection is successful
    if ($pdo) {
        //echo '<script>alert("Database connection successful.");</script>';
    } else {
        echo '<script>alert("Error connecting to the database.");</script>';
    }
} catch (PDOException $e) {
    echo '<script>alert("Error connecting to the database: ' . $e->getMessage() . '");</script>';
}
?>
