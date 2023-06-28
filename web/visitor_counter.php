<?php
// Connect to the database (replace with your own database credentials)
require_once('connect.php');

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Create table if it doesn't exist already
$tableName = "visitor_count";
$checkTableExists = $pdo->query("SHOW TABLES LIKE '$tableName'");
if ($checkTableExists->rowCount() == 0) {
    $sqlCreate = "CREATE TABLE visitor_count (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    count INT(11) DEFAULT 0
)";
    $pdo->exec($sqlCreate);

}
// Check if a visitor entry exists in the database
$checkVisitorQuery = $pdo->query("SELECT * FROM visitor_count LIMIT 1");
if ($checkVisitorQuery->rowCount() === 0) {
    // No entry exists, insert a new row
    $pdo->exec("INSERT INTO visitor_count (count) VALUES (1)");
} else {
    // Entry exists, update the count by incrementing it by 1
    $pdo->exec("UPDATE visitor_count SET count = count + 1");
}

// Retrieve the current count
$visitorCountQuery = $pdo->query("SELECT count FROM visitor_count LIMIT 1");
$visitorCount = $visitorCountQuery->fetchColumn();

// Output the visitor count
echo "Total Visitors: " . $visitorCount;


?>