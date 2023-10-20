<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "ar_treasure"; 
$conn = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($conn->connect_error) {
    echo '<script>console.error("Database connection failed: ' . $conn->connect_error . '");</script>';
}
?>
